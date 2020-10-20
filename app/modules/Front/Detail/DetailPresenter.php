<?php declare(strict_types=1);


namespace App\Modules\Front\Detail;


use App\Model\Database\Entity\Proposal;
use App\Model\Database\EntityManager;
use App\Modules\Front\BaseFrontPresenter;
use App\UI\Control\CommentTable\CommentTable;
use App\UI\Control\CommentTable\CommentTableFactory;
use App\UI\Control\VoteTable\VoteTable;
use App\UI\Control\VoteTable\VoteTableFactory;
use App\UI\Form\CommentForm\CommentForm;
use App\UI\Form\FormFactory;
use App\UI\Form\VoteForm\VoteForm;

class DetailPresenter extends BaseFrontPresenter
{

	/**
	 * @var EntityManager
	 */
	private $entityManager;
	/**
	 * @var FormFactory
	 */
	private $formFactory;
	/**
	 * @var CommentTableFactory
	 */
	private $voteTableFactory;
	/**
	 * @var mixed
	 */
	private $commentTableFactory;
	/**
	 * @persistent
	 * @var Proposal
	 */
	private $proposal;

	/**
	 * DetailPresenter constructor.
	 * @param EntityManager $entityManager
	 * @param FormFactory $formFactory
	 * @param CommentTableFactory $commentTableFactory
	 * @param VoteTableFactory $voteTableFactory
	 */
	public function __construct(EntityManager $entityManager,
								FormFactory $formFactory,
								CommentTableFactory $commentTableFactory,
								VoteTableFactory $voteTableFactory)
	{
		$this->entityManager = $entityManager;
		$this->formFactory = $formFactory;
		$this->voteTableFactory = $voteTableFactory;
		$this->commentTableFactory = $commentTableFactory;
	}

	public function actionDefault(int $id){
		$proposal = $this->entityManager->getProposalRepository()->find($id);
		$this->proposal = $proposal;

	}

	public function renderDefault(int $id): void
	{
		$this->template->proposal = $this->proposal;

	}

	public function createComponentVoteForm(): VoteForm
	{
		return $this->formFactory->createVoteForm($this->proposal);
	}

	public function createComponentVoteTable(): VoteTable
	{
		return $this->voteTableFactory->createVoteTable($this->proposal);
	}

	public function createComponentCommentTable(): CommentTable
	{
		return $this->commentTableFactory->createCommentTable($this->proposal);
	}

	public function createComponentCommentForm(): CommentForm
	{
		return $this->formFactory->createComponentCommentForm($this->proposal);
	}
}
