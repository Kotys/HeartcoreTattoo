<?php
/**
 * Created by PhpStorm.
 * User: kotycz
 * Date: 18/10/2017
 * Time: 23:09
 */

namespace KotysPackages\ContentModule\Article\Entity;

use Doctrine\ORM\Mapping as ORM;
use KotysPackages\CoreModule\MVC\Template\Entity\BaseTemplate;

/**
 * @ORM\Entity
 * @ORM\Table(name="simple_site_article_template")
 */
class ArticleTemplate extends BaseTemplate
{
	use \Kdyby\Doctrine\Entities\Attributes\Identifier;
}