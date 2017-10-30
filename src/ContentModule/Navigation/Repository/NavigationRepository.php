<?php

namespace KotysPackages\ContentModule\Navigation\Repository;

use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityRepository;
use KotysPackages\ContentModule\Navigation\Entity\Navigation;
use KotysPackages\ContentModule\Navigation\Entity\NavigationItem;

/**
 * Class NavigationRepository
 * @package KotysPackages\ContentModule\Navigation\Repository
 */
class NavigationRepository
{
	/**
	 * @var EntityManager $entityManager
	 */
	protected $entityManager;

	/**
	 * @var EntityRepository
	 */
	protected $navigationRepository;

	/**
	 * @var EntityRepository
	 */
	protected $navItemsRepository;


	/**
	 * NavigationRepository constructor.
	 * @param EntityManager $entityManager
	 */
	public function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
		$this->navigationRepository = $this->entityManager->getRepository(Navigation::class);
		$this->navItemsRepository = $this->entityManager->getRepository(NavigationItem::class);
	}

	/**
	 * @return EntityRepository
	 */
	public function getNavItemsRepository()
	{
		return $this->navItemsRepository;
	}

	/**
	 * @return EntityRepository
	 */
	public function getNavigationRepository()
	{
		return $this->navigationRepository;
	}

	/**
	 * @param $code
	 * @return Navigation|null
	 */
	public function getNavigationByCode($code)
	{
		return $this->getNavigationRepository()->findOneBy([
			'code' => $code
		]);
	}
}