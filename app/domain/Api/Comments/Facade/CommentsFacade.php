<?php declare(strict_types = 1);

namespace App\Domain\Api\Comments\Facade;

use App\Domain\Api\Comments\Response\CommentResDto;
use App\Model\Database\EntityManager;
use App\Model\Exception\Runtime\Database\EntityNotFoundException;

final class CommentsFacade
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
	 * @return CommentResDto[]
	 */
	public function findBy(array $criteria = [], array $orderBy = ['id' => 'ASC'], int $limit = 10, int $offset = 0): array
	{
		$entities = $this->em->getCommentRepository()->findBy($criteria, $orderBy, $limit, $offset);
		$result = [];

		foreach ($entities as $entity) {
			$result[] = CommentResDto::from($entity);
		}

		return $result;
	}

	/**
	 * @param int $limit
	 * @param int $offset
	 * @return CommentResDto[]
	 */
	public function findAll(int $limit = 10, int $offset = 0): array
	{
		return $this->findBy([], ['id' => 'ASC'], $limit, $offset);
	}

	/**
	 * @param mixed[] $criteria
	 * @param string[] $orderBy
	 * @return CommentResDto
	 */
	public function findOneBy(array $criteria, ?array $orderBy = null): CommentResDto
	{
		$entity = $this->em->getCommentRepository()->findOneBy($criteria, $orderBy);

		if (!$entity) {
			throw new EntityNotFoundException();
		}

		return CommentResDto::from($entity);
	}

	public function findOne(int $id): CommentResDto
	{
		return $this->findOneBy(['id' => $id]);
	}

}
