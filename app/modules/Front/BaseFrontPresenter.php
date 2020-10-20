<?php declare(strict_types=1);

namespace App\Modules\Front;

use App\Modules\Base\SecuredPresenter;
use App\UI\Navigation\Navbar\Navbar;
use App\UI\Navigation\NavigationFactory;
use App\UI\Navigation\Sidebar\Sidebar;

abstract class BaseFrontPresenter extends SecuredPresenter
{
	/**
	 * @var NavigationFactory
	 */
	private $navigationFactory;


	protected function createComponentNavbar(): Navbar
	{
		$navbar = $this->navigationFactory->createNavbar();
		$navbar->onSearch[] = (function (Navbar $navbar, $data) {
			$this->redirect('Search:default', $data->search);
		}
		);
		return $navbar;
	}

	protected function createComponentSidebar(): Sidebar
	{
		return $this->navigationFactory->createSidebar();
	}

	public function injectNavigationFactory(NavigationFactory $navigationFactory): void
	{
		$this->navigationFactory = $navigationFactory;
	}
}
