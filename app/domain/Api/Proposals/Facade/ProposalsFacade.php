<?php declare(strict_types=1);

namespace App\Domain\Api\Proposals\Facade;

use App\Domain\Api\Proposals\Response\ProposalResDto;
use App\Model\Database\EntityManager;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;

final class ProposalsFacade
{

	/** @var EntityManager */
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	/**
	 * @param mixed[] $criteria
	 * @param string[] $orderBy
	 * @param int $limit
	 * @param int $offset
	 * @return ProposalResDto[]
	 */
	public function findBy(array $criteria = [], array $orderBy = ['id' => 'ASC'], int $limit = 10, int $offset = 0): array
	{
		$entities = $this->em->getProposalRepository()->findBy($criteria, $orderBy, $limit, $offset);
		$result = [];

		foreach ($entities as $entity) {
			$result[] = ProposalResDto::from($entity);
		}

		return $result;
	}

	/**
	 * @param int $limit
	 * @param int $offset
	 * @return ProposalResDto[]
	 */
	public function findAll(int $limit = 10, int $offset = 0): array
	{
		return $this->findBy([], ['id' => 'ASC'], $limit, $offset);
	}

	/**
	 * @param mixed[] $criteria
	 * @param string[] $orderBy
	 * @return ProposalResDto
	 */
	public function findOneBy(array $criteria, ?array $orderBy = null): ProposalResDto
	{
		$entity = $this->em->getProposalRepository()->findOneBy($criteria, $orderBy);

		if (!$entity) {
			throw new EntityNotFoundException();
		}

		return ProposalResDto::from($entity);
	}

	public function findOne(int $id): ProposalResDto
	{
		return $this->findOneBy(['id' => $id]);
	}

}
