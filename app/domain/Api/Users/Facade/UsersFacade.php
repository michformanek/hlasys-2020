<?php declare(strict_types=1);

namespace App\Domain\Api\Users\Facade;

use App\Domain\Api\Logs\Response\LogResDto;
use App\Domain\Api\Users\Response\UserResDto;
use App\Model\Database\Entity\User;
use App\Model\Database\EntityManager;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;

final class UsersFacade
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
	 * @return UserResDto[]
	 */
	public function findBy(array $criteria = [], array $orderBy = ['id' => 'ASC'], int $limit = 10, int $offset = 0): array
	{
		$entities = $this->em->getUserRepository()->findBy($criteria, $orderBy, $limit, $offset);
		$result = [];

		foreach ($entities as $entity) {
			$result[] = UserResDto::from($entity);
		}

		return $result;
	}

	/**
	 * @param int $limit
	 * @param int $offset
	 * @return UserResDto[]
	 */
	public function findAll(int $limit = 10, int $offset = 0): array
	{
		return $this->findBy([], ['id' => 'ASC'], $limit, $offset);
	}

	/**
	 * @param mixed[] $criteria
	 * @param string[] $orderBy
	 * @return UserResDto
	 */
	public function findOneBy(array $criteria, ?array $orderBy = null): UserResDto
	{
		$entity = $this->em->getUserRepository()->findOneBy($criteria, $orderBy);

		if (!$entity) {
			throw new EntityNotFoundException();
		}

		return UserResDto::from($entity);
	}

	public function findOne(int $id): UserResDto
	{
		return $this->findOneBy(['id' => $id]);
	}

}
