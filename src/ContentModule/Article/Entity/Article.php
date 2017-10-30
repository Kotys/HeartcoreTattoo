<?php
/**
 * Created by PhpStorm.
 * User: kotycz
 * Date: 18/10/2017
 * Time: 23:08
 */

namespace KotysPackages\ContentModule\Article\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="simple_site_article")
 */
class Article
{
	use \Kdyby\Doctrine\Entities\Attributes\Identifier;

	/**
	 * @var string $code
	 * @ORM\Column(type="string")
	 */
	protected $code;

	/**
	 * @var string $route
	 * @ORM\Column(type="string")
	 */
	protected $route;

	/**
	 * @var \KotysPackages\ContentModule\Article\Entity\ArticleTemplate|null $template
	 * @ORM\ManyToOne(targetEntity="\KotysPackages\ContentModule\Article\Entity\ArticleTemplate")
	 * @ORM\JoinColumn(name="template_id", referencedColumnName="id", nullable=true)
	 */
	protected $template;

	/**
	 * @var string $content
	 * @ORM\Column(type="text")
	 */
	protected $content;

	/**
	 * @return string
	 */
	public function getCode()
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 */
	public function setCode($code)
	{
		$this->code = $code;
	}

	/**
	 * @return string
	 */
	public function getRoute()
	{
		return $this->route;
	}

	/**
	 * @param string $route
	 */
	public function setRoute($route)
	{
		$this->route = $route;
	}

	/**
	 * @return ArticleTemplate|null
	 */
	public function getTemplate()
	{
		return $this->template;
	}

	/**
	 * @param ArticleTemplate|null $template
	 */
	public function setTemplate(ArticleTemplate $template)
	{
		$this->template = $template;
	}

	/**
	 * @return string
	 */
	public function getContent()
	{
		return htmlspecialchars_decode($this->content);
	}

	/**
	 * @param string $content
	 */
	public function setContent($content)
	{
		$this->content = htmlspecialchars($content);
	}
}