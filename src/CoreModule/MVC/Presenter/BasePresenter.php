<?php

namespace KotysPackages\CoreModule\MVC\Presenter;

use KotysPackages\ContentModule\Navigation\Control\NavigationControl;
use Nette\Application\UI\Presenter;

/**
 * Class BasePresenter
 * @package KotysPackages\CoreModule\MVC\Presenter
 */
abstract class BasePresenter extends Presenter
{

	/** @var NavigationControl @inject */
	public $navigationControl;

	/**
	 * BasePresenter constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function createComponentNavigationControl()
	{
		return $this->navigationControl;
	}
}