<?php

namespace KotysPackages\ContentModule\Navigation\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="simple_site_navigation")
 */
class Navigation
{
	use \Kdyby\Doctrine\Entities\Attributes\Identifier;

	/**
	 * @var string $code
	 * @ORM\Column(type="string")
	 */
	protected $code;

	/**
	 * @var string $title
	 * @ORM\Column(type="string")
	 */
	protected $title;

	/**
	 * @var int|null $maxRecursion
	 * @ORM\Column(type="integer", nullable=true)
	 */
	protected $maxRecursion;

	/**
	 * @var \KotysPackages\ContentModule\Navigation\Entity\NavigationItem[] $navigationItems
	 * @ORM\OneToMany(targetEntity="\KotysPackages\ContentModule\Navigation\Entity\NavigationItem", mappedBy="directDescendantOfNavigation", cascade={"persist", "remove"})
	 * @ORM\OrderBy({"sort" = "ASC"})
	 */
	protected $navigationItems;

	/**
	 * @var \KotysPackages\ContentModule\Navigation\Entity\NavigationTemplate|null $template
	 * @ORM\ManyToOne(targetEntity="\KotysPackages\ContentModule\Navigation\Entity\NavigationTemplate")
	 * @ORM\JoinColumn(name="template_id", referencedColumnName="id", nullable=true)
	 */
	protected $template;

	/**
	 * Navigation constructor.
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
	 * @return \KotysPackages\ContentModule\Navigation\Entity\NavigationItem[]
	 */
	public function getNavigationItems()
	{
		return $this->navigationItems;
	}

	/**
	 * @return \KotysPackages\ContentModule\Navigation\Entity\NavigationTemplate|null
	 */
	public function getTemplate()
	{
		return $this->template;
	}
}