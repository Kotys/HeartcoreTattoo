<?php

namespace KotysPackages\ContentModule\Navigation\Entity;

use Doctrine\ORM\Mapping as ORM;
use KotysPackages\CoreModule\MVC\Template\Entity\BaseTemplate;

/**
 * @ORM\Entity
 * @ORM\Table(name="simple_site_navigation_template")
 */
class NavigationTemplate extends BaseTemplate
{
	use \Kdyby\Doctrine\Entities\Attributes\Identifier;
}