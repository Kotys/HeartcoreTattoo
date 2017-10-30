<?php
/**
 * Created by PhpStorm.
 * User: kotycz
 * Date: 30/10/2017
 * Time: 21:54
 */

namespace KotysPackages\ContentModule\Article\Service;

use KotysPackages\ContentModule\Article\Entity\Article;
use KotysPackages\ContentModule\Article\Repository\ArticleRepository;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;

/**
 * Class ArticlesRouting
 * @package KotysPackages\ContentModule\Article\Service
 */
class ArticlesRouting
{
	/**
	 * @var ArticleRepository
	 */
	protected $articleRepository;

	/**
	 * ArticlesRouting constructor.
	 * @param ArticleRepository $articleRepository
	 */
	public function __construct(ArticleRepository $articleRepository)
	{
		$this->articleRepository = $articleRepository;
	}

	/**
	 * @param RouteList $routeList
	 */
	public function applyRouting(RouteList &$routeList)
	{
		/** @var Article $article */
		foreach ($this->articleRepository->getRepository()->findAll() as $article) {
			$routeList[] = new Route($article->getRoute(), 'Article:default');
		}
	}
}