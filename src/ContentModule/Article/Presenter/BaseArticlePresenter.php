<?php

namespace KotysPackages\ContentModule\Article\Presenter;

use KotysPackages\ContentModule\Article\Entity;
use KotysPackages\ContentModule\Article\Repository;
use Nette\Application\ApplicationException;
use Nette\Application\BadRequestException;

/**
 * Class BaseArticlePresenter
 * @package KotysPackages\ContentModule\Article\Presenter
 */
abstract class BaseArticlePresenter extends \KotysPackages\CoreModule\MVC\Presenter\BasePresenter
{
	/**
	 * @var Repository\ArticleRepository $articles
	 */
	protected $articlesRepository;

	/**
	 * BaseArticlePresenter constructor.
	 * @param Repository\ArticleRepository $articlesRepository
	 */
	public function __construct(Repository\ArticleRepository $articlesRepository)
	{
		parent::__construct();
		$this->articlesRepository = $articlesRepository;
	}

	/**
	 * @param $articleCode
	 * @throws ApplicationException
	 * @throws BadRequestException
	 */
	public function actionDefault($articleCode = '/')
	{
		$article = $this->articlesRepository->getRepository()->findOneBy([
			'route' => $articleCode
		]);

		if ($article instanceof Entity\Article) {
			if ($article->getTemplate() instanceof Entity\ArticleTemplate) {
				$templateFile = __APP_DIR__ . '/presenters/templates/_presenters/' . $article->getTemplate()->getFile();
				if (!file_exists($templateFile)) {
					throw new ApplicationException('Template \'' . $templateFile . '\' file not found.');
				}
			} else {
				$templateFile = __DIR__ . '/BaseArticle.latte';
			}

			$this->getTemplate()->setFile($templateFile);
			$this->getTemplate()->article = $article;
		} else {
			throw new BadRequestException('Article not found.');
		}
	}
}