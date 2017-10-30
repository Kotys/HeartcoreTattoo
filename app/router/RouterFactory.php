<?php

namespace App;

use KotysPackages\ContentModule\Article\Service\ArticlesRouting;
use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;
use Tracy\Debugger;
use Tracy\Logger;

/**
 * Class RouterFactory
 * @package App
 */
class RouterFactory
{
	use Nette\StaticClass;

	/**
	 * @param ArticlesRouting $articlesRoutingGenerator
	 * @return RouteList
	 * @throws Nette\Application\ApplicationException
	 */
	public static function createRouter(ArticlesRouting $articlesRoutingGenerator)
	{
		$appRouter = new RouteList;

		try {
			$articlesRoutingGenerator->applyRouting($appRouter);
			// More generators
		} catch (\Exception $e) {
			if (Debugger::$productionMode) {
				throw new Nette\Application\ApplicationException($e->getMessage());
			} else {
				Debugger::log($e, Logger::CRITICAL);
			}
		}

		$appRouter[] = new Route('<presenter>/<action>[/<id>]', 'Article:default');
		return $appRouter;
	}
}
