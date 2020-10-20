<?php


namespace App\UI\Form\ProposalForm;


use Nette\Application\UI\Control;
use Nette\Application\UI\Form;

class ProposalForm extends Control
{

	private $proposalFacade;


	public function render()
	{
	}

	public function createComponentForm()
	{
		$form = new Form();
		$form->onSuccess[] = [$this, 'success'];
		return $form;
	}

	public function success($form, $values)
	{
		$this->commentFacade->createComment($values);
	}


}
