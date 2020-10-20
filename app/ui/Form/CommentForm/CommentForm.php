<?php


namespace App\UI\Form\CommentForm;


use App\Domain\Comment\CommentFacade;
use App\Model\Database\Entity\Proposal;
use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Security\User;

class CommentForm extends Control
{

	/**
	 * @var User
	 */
	private $user;
	/**
	 * @var Proposal
	 */
	private $proposal;
	/**
	 * @var CommentFacade
	 */
	private $commentFacade;

	/**
	 * CommentForm constructor.
	 * @param User $user
	 * @param Proposal $proposal
	 * @param CommentFacade $commentFacade
	 */
	public function __construct(User $user,
								Proposal $proposal,
								CommentFacade $commentFacade)
	{
		$this->user = $user;
		$this->proposal = $proposal;
		$this->commentFacade = $commentFacade;
	}

	public function createComponentForm()
	{
		$form = new Form();
		$form->addHidden('proposalId')
			->setDefaultValue($this->proposal->getId());

		$form->addTextArea('text', 'Text komentáře')
			->setRequired('Vyplňte, prosím, text komentáře.');

		$form->addSubmit('send', 'Přidat komentář');

		$form->onSuccess[] = [$this, 'success'];
		return $form;
	}

	public function success($form, $values)
	{
		$this->commentFacade->createComment($values);
	}

	public function render()
	{
		$template = $this->template;
		$template->setFile(__DIR__ . '/templates/comment_form.latte');
		$template->render();
	}

}
