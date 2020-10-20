<?php


namespace App\UI\Control\CommentTable;


use App\Model\Database\Entity\Proposal;
use Nette\Application\UI\Control;

class CommentTable extends Control
{

	/**
	 * @var Proposal
	 */
	private $proposal;

	/**
	 * CommentTable constructor.
	 * @param Proposal $proposal
	 */
	public function __construct(Proposal $proposal)
	{
		$this->proposal = $proposal;
	}


	public function render(): void
	{
		$template = $this->template;
		$template->setFile(__DIR__ . '/templates/comment_table.latte');
		$template->comments = $this->proposal->getComments();
		$template->render();
	}

}
