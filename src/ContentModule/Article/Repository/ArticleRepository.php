<?php
/**
 * Created by PhpStorm.
 * User: kotycz
 * Date: 30/10/2017
 * Time: 20:07
 */

namespace KotysPackages\ContentModule\Article\Repository;

use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityRepository;
use KotysPackages\ContentModule\Article\Entity\Article;

/**
 * Class Articles
 * @package KotysPackages\ContentModule\Article\Services
 */
class ArticleRepository
{
	/**
	 * @var EntityManager $entityManager
	 */
	private $entityManager;


	/**
	 * @var EntityRepository
	 */
	private $articlesRepository;

	/**
	 * Articles constructor.
	 * @param EntityManager $entityManager
	 */
	public function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
		$this->articlesRepository = $this->entityManager->getRepository(Article::class);
	}

	/**
	 * @return Article[]
	 */
	public function getAll()
	{
		return $this->getRepository()->findAll();
	}

	/**
	 * @return \Kdyby\Doctrine\EntityRepository
	 */
	public function getRepository()
	{
		return $this->articlesRepository;
	}
}