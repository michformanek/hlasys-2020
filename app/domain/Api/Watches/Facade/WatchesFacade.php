<?php declare(strict_types=1);

namespace App\Domain\Api\Watches\Facade;

use App\Domain\Api\Logs\Response\LogResDto;
use App\Domain\Api\Watches\Response\WatchResDto;
use App\Model\Database\EntityManager;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;

final class WatchesFacade
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
	 * @return WatchResDto[]
	 */
	public function findBy(array $criteria = [], array $orderBy = ['id' => 'ASC'], int $limit = 10, int $offset = 0): array
	{
		$entities = $this->em->getWatchRepository()->findBy($criteria, $orderBy, $limit, $offset);
		$result = [];

		foreach ($entities as $entity) {
			$result[] = WatchResDto::from($entity);
		}

		return $result;
	}

	/**
	 * @param int $limit
	 * @param int $offset
	 * @return WatchResDto[]
	 */
	public function findAll(int $limit = 10, int $offset = 0): array
	{
		return $this->findBy([], ['id' => 'ASC'], $limit, $offset);
	}

	/**
	 * @param mixed[] $criteria
	 * @param string[] $orderBy
	 * @return WatchResDto
	 */
	public function findOneBy(array $criteria, ?array $orderBy = null): WatchResDto
	{
		$entity = $this->em->getWatchRepository()->findOneBy($criteria, $orderBy);

		if (!$entity) {
			throw new EntityNotFoundException();
		}

		return WatchResDto::from($entity);
	}

	public function findOne(int $id): WatchResDto
	{
		return $this->findOneBy(['id' => $id]);
	}

}
