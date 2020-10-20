<?php


namespace App\UI\Navigation\Navbar;

use Nette\Application\UI\Control;
use Nette\Application\UI\Form;

class Navbar extends Control
{

	public $onSearch;

	public function render()
	{
		$template = $this->template;
		$template->setFile(__DIR__ . '/templates/navbar.latte');
		$template->render();
	}

	public function createComponentSearchForm(): Form
	{
		$form = new Form;
		$form->addText('search');
		$form->onSuccess[] = [$this, 'formSucceeded'];
		return $form;
	}


	public function formSucceeded(Form $form, $data): void
	{
		$this->onSearch($this, $data);
	}

}
