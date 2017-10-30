<?php

namespace KotysPackages\ContentModule\Navigation\Control;

use KotysPackages\ContentModule\Navigation\Entity;
use KotysPackages\ContentModule\Navigation\Repository\NavigationRepository;
use Nette\Application\ApplicationException;
use Nette\Application\UI\Control;

/**
 * Class NavigationControl
 * @package KotysPackages\ContentModule\Navigation\Control
 */
class NavigationControl extends Control
{
	/**
	 * @var NavigationRepository $navigationRepository
	 */
	protected $navigationRepository;

	/**
	 * NavigationControl constructor.
	 * @param NavigationRepository $navigationRepository
	 */
	public function __construct(NavigationRepository $navigationRepository)
	{
		parent::__construct();
		$this->navigationRepository = $navigationRepository;
	}

	/**
	 * @param $navigationCode
	 * @throws ApplicationException
	 */
	public function render($navigationCode)
	{
		$navigation = $this->navigationRepository->getNavigationByCode($navigationCode);
		if (!$navigation instanceof Entity\Navigation) {
			throw new ApplicationException('Navigation \'' . $navigationCode . '\' not found.');
		}

		$controlTemplate = $this->getTemplate();

		if ($navigation->getTemplate() instanceof Entity\NavigationTemplate) {
			$templateFile = __APP_DIR__ . '/presenters/templates/_controls/' . $navigation->getTemplate()->getFile();
			if (!file_exists($templateFile)) {
				throw new ApplicationException('Template \'' . $templateFile . '\' file not found.');
			}
		} else {
			$templateFile = __DIR__ . '/NavigationControl.latte';
		}

		$controlTemplate->setFile($templateFile);

		$controlTemplate->navigation = $navigation;

		$controlTemplate->render();
	}
}