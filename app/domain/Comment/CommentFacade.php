<?php


namespace App\Domain\Comment;


use App\Model\Database\Entity\Comment;
use App\Model\Database\Entity\Proposal;
use App\Model\Database\EntityManager;
use Nette\Security\User;

class CommentFacade
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
	 * CommentFacade constructor.
	 * @param EntityManager $entityManager
	 * @param User $user
	 */
	public function __construct(EntityManager $entityManager,
								User $user)
	{
		$this->entityManager = $entityManager;
		$this->user = $user;
	}

	public function createComment($values)
	{
		$comment = new Comment();
		$comment->setProposal($this->entityManager->getReference(Proposal::class, $values['proposalId']));
		$comment->setText($values['text']);
		$comment->setUser($this->entityManager->getReference(\App\Model\Database\Entity\User::class, $this->user->getId()));
		$comment->setCreatedAt();
		$this->entityManager->persist($comment);
		$this->entityManager->flush();
	}
}
