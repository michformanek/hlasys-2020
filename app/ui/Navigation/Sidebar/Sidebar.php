<?php


namespace App\UI\Navigation\Sidebar;


use Nette\Application\UI\Control;

class Sidebar extends Control
{

	public function render()
	{
		$template = $this->template;
		$template->setFile(__DIR__ . '/templates/sidebar.latte');
		$template->render();
	}

}
