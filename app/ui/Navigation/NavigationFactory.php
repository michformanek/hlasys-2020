<?php declare(strict_types=1);

namespace App\UI\Navigation;


use App\UI\Navigation\Navbar\Navbar;
use App\UI\Navigation\Sidebar\Sidebar;

final class NavigationFactory
{


	public function createSidebar(): Sidebar
	{
		return new Sidebar();
	}

	public function createNavbar(): Navbar
	{
		return new Navbar();
	}


}
