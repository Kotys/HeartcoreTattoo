<?php

namespace App;

use KotysPackages\ContentModule\Article\Service\ArticlesRouting;
use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


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
	 */
	public static function createRouter(ArticlesRouting $articlesRoutingGenerator)
	{
		$appRouter = new RouteList;

//		$articlesRoutingGenerator->applyRouting($appRouter);

		$appRouter[] = new Route('<presenter>/<action>[/<id>]', 'Article:default');
		return $appRouter;
	}
}
