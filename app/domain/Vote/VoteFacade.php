<?php declare(strict_types=1);


namespace App\Domain\Vote;


use App\Model\Database\Entity\Proposal;
use App\Model\Database\Entity\Vote;
use App\Model\Database\EntityManager;
use Nette\Security\User;

class VoteFacade
{
	/**
	 * @var EntityManager
	 */
	private $entityManager;
	/**
	 * @var User
	 */
	private $user;

	/**
	 * VoteFacade constructor.
	 * @param EntityManager $entityManager
	 * @param User $user
	 */
	public function __construct(EntityManager $entityManager,
								User $user)
	{
		$this->entityManager = $entityManager;
		$this->user = $user;
	}

	public function getVoteOfCurrentUser(Proposal $proposal): ?Vote
	{
		foreach ($proposal->getVotes() as $vote) {
			if ($vote->getUser()->getId() == $this->user->getId()) {
				return $vote;
			}
		}
		return null;
	}

	public function vote($proposal, $type): Vote
	{
		$userReference = $this->entityManager->getReference(\App\Model\Database\Entity\User::class, $this->user->getId());

		$vote = $this->getVoteOfCurrentUser($proposal);
		if ($vote == null) {
			$vote = new Vote();
		}
		$vote->setUser($userReference);
		$vote->setProposal($proposal);
		$vote->setPositive($type);

		$this->entityManager->persist($vote);
		$this->entityManager->flush();

//		$vote->setType($type);
//		if ($vote->getId() == null) {
//			$this->logService->logVoteAdded($proposalReference, $vote);
//		} else {
//			$this->logService->logVoteChanged($proposalReference, $vote);
//		}
//
//		if ($isNew) {
//			$this->mailService->sendVoteAdded($vote);
//		} else {
//			$this->mailService->sendVoteChanged($vote);
//		}

		return $vote;
	}

}
