<?php
/**
 * Created by PhpStorm.
 * User: kotycz
 * Date: 30/10/2017
 * Time: 22:42
 */

namespace KotysPackages\CoreModule\MVC\Template\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class BaseTemplate
 * @package KotysPackages\CoreModule\MVC\Template
 */
abstract class BaseTemplate
{

	/**
	 * @var string $code
	 * @ORM\Column(type="string")
	 */
	protected $code;

	/**
	 * @var string $file
	 * @ORM\Column(type="string")
	 */
	protected $file;

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
	public function getFile()
	{
		return $this->file;
	}
}