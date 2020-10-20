<?php


namespace App\Domain\Proposal;


use App\Model\Database\Entity\Proposal;
use App\Model\Database\EntityManager;

class ProposalFacade
{

	/**
	 * @var EntityManager
	 */
	private $entityManager;

	/**
	 * ProposalFacade constructor.
	 * @param EntityManager $entityManager
	 */
	public function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
	}

	public function createProposal($values)
	{
		$proposal = new Proposal();
		$this->entityManager->persist($proposal);
		$this->entityManager->flush();
	}

}
