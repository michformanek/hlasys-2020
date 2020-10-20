<?php declare(strict_types = 1);


namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Vote;

/**
 * @method Vote|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Vote|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Vote[] findAll()
 * @method Vote[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Vote>
 */
class VoteRepository extends AbstractRepository
{

}
