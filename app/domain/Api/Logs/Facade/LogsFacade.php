<?php declare(strict_types=1);

namespace App\Domain\Api\Logs\Facade;

use App\Domain\Api\Logs\Response\LogResDto;
use App\Model\Database\EntityManager;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;

final class LogsFacade
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
	 * @return LogResDto[]
	 */
	public function findBy(array $criteria = [], array $orderBy = ['id' => 'ASC'], int $limit = 10, int $offset = 0): array
	{
		$entities = $this->em->getLogRepository()->findBy($criteria, $orderBy, $limit, $offset);
		$result = [];

		foreach ($entities as $entity) {
			$result[] = LogResDto::from($entity);
		}

		return $result;
	}

	/**
	 * @param int $limit
	 * @param int $offset
	 * @return LogResDto[]
	 */
	public function findAll(int $limit = 10, int $offset = 0): array
	{
		return $this->findBy([], ['id' => 'ASC'], $limit, $offset);
	}

	/**
	 * @param mixed[] $criteria
	 * @param string[] $orderBy
	 * @return LogResDto
	 */
	public function findOneBy(array $criteria, ?array $orderBy = null): LogResDto
	{
		$entity = $this->em->getLogRepository()->findOneBy($criteria, $orderBy);

		if (!$entity) {
			throw new EntityNotFoundException();
		}

		return LogResDto::from($entity);
	}

	public function findOne(int $id): LogResDto
	{
		return $this->findOneBy(['id' => $id]);
	}

}
