<?php

namespace KotysPackages\ContentModule\Navigation\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="simple_site_navigation_item")
 */
class NavigationItem
{
	use \Kdyby\Doctrine\Entities\Attributes\Identifier;

	/**
	 * @var string $code
	 * @ORM\Column(type="string")
	 */
	protected $code;

	/**
	 * @var string $title
	 * @ORM\Column(type="string", nullable=true)
	 */
	protected $title;

	/**
	 * @var int $sort
	 * @ORM\Column(type="integer")
	 */
	protected $sort;

	/**
	 * @var \KotysPackages\ContentModule\Navigation\Entity\Navigation|null $directDescendantOfNavigation
	 * @ORM\ManyToOne(targetEntity="\KotysPackages\ContentModule\Navigation\Entity\Navigation", inversedBy="navigationItems")
	 * @ORM\JoinColumn(name="direct_descendant_of_navigation_id", referencedColumnName="id", nullable=true)
	 */
	protected $directDescendantOfNavigation;

	/**
	 * @var \KotysPackages\ContentModule\Navigation\Entity\NavigationItem|null $parentNavigationItem
	 * @ORM\ManyToOne(targetEntity="\KotysPackages\ContentModule\Navigation\Entity\NavigationItem")
	 * @ORM\JoinColumn(name="parent_navigation_item_id", referencedColumnName="id", nullable=true)
	 */
	protected $parentNavigationItem;

	/**
	 * @var \KotysPackages\ContentModule\Navigation\Entity\NavigationItem[] $navigationItems
	 * @ORM\OneToMany(targetEntity="\KotysPackages\ContentModule\Navigation\Entity\NavigationItem", mappedBy="parentNavigationItem", cascade={"persist", "remove"})
	 * @ORM\OrderBy({"sort" = "ASC"})
	 */
	protected $navigationItems;

	/**
	 * NavigationItem constructor.
	 */
	public function __construct()
	{
		$this->navigationItems = new ArrayCollection;
	}

	/**
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @return \KotysPackages\ContentModule\Navigation\Entity\Navigation|null
	 */
	public function getDirectDescendantOfNavigation()
	{
		return $this->directDescendantOfNavigation;
	}

	/**
	 * @return \KotysPackages\ContentModule\Navigation\Entity\NavigationItem|null
	 */
	public function getParentNavigationItem()
	{
		return $this->parentNavigationItem;
	}

	/**
	 * @return ArrayCollection
	 */
	public function getNavigationItems()
	{
		return $this->navigationItems;
	}


	/**
	 * @return bool
	 */
	public function hasNavigationItems()
	{
		return $this->getNavigationItems()->count() > 0;
	}
}