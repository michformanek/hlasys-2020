<?php declare(strict_types=1);

namespace App\UI\Form\VoteForm;

use App\Domain\Vote\VoteFacade;
use App\Model\Database\Entity\Proposal;
use App\Model\Database\EntityManager;
use Nette\Application\UI\Control;
use Nette\Application\UI\Form;
use Nette\Security\User;

class VoteForm extends Control
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
	 * @var Proposal
	 */
	private $proposal;

	/**
	 * VoteForm constructor.
	 * @param Proposal $proposal
	 * @param EntityManager $entityManager
	 * @param VoteFacade $voteFacade
	 * @param User $user
	 */
	public function __construct(Proposal $proposal,
								EntityManager $entityManager,
								VoteFacade $voteFacade,
								User $user)
	{
		$this->entityManager = $entityManager;
		$this->voteFacade = $voteFacade;
		$this->user = $user;
		$this->proposal = $proposal;
	}

	public function render(): void
	{
		$template = $this->template;
		$template->setFile(__DIR__ . '/templates/vote_form.latte');
		$template->proposal = $this->proposal;
		$template->userRole = $this->user;
		$template->vote = $this->voteFacade->getVoteOfCurrentUser($this->proposal);
		$template->render();
	}

	public function handlePositive()
	{
		$this->voteFacade->vote($this->proposal, true);
//		$this->onVote();
	}

	public function handleNegative()
	{
		$this->voteFacade->vote($this->proposal, false);
//		$this->onVote();
	}

}
