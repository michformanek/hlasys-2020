<?php declare(strict_types=1);

namespace App\UI\Form;

use App\Domain\Comment\CommentFacade;
use App\Domain\Vote\VoteFacade;
use App\Model\Database\Entity\Proposal;
use App\Model\Database\EntityManager;
use App\UI\Form\CommentForm\CommentForm;
use App\UI\Form\VoteForm\VoteForm;
use Nette\Security\User;

final class FormFactory
{
	/**
	 * @var EntityManager
	 */
	private $entityManager;
	/**
	 * @var VoteFacade
	 */
	private $voteFacade;
	/**
	 * @var User
	 */
	private $user;
	/**
	 * @var CommentFacade
	 */
	private $commentFacade;

	/**
	 * FormFactory constructor.
	 * @param EntityManager $entityManager
	 * @param VoteFacade $voteFacade
	 * @param CommentFacade $commentFacade
	 * @param User $user
	 */
	public function __construct(EntityManager $entityManager,
								VoteFacade $voteFacade,
								CommentFacade $commentFacade,
								User $user
	)
	{
		$this->entityManager = $entityManager;
		$this->voteFacade = $voteFacade;
		$this->user = $user;
		$this->commentFacade = $commentFacade;
	}

	private function create(): BaseForm
	{
		return new BaseForm();
	}


	/**
	 * @param Proposal $proposal
	 * @return VoteForm
	 */
	public function createVoteForm(Proposal $proposal): VoteForm
	{
		return new VoteForm($proposal, $this->entityManager, $this->voteFacade, $this->user);
	}

	/**
	 * @param Proposal $proposal
	 * @return CommentForm
	 */
	public function createComponentCommentForm(Proposal $proposal): CommentForm
	{
		return new CommentForm($this->user, $proposal, $this->commentFacade);
	}

}
