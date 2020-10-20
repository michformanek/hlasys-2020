<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Status;

/**
 * @method Status|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Status|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Status[] findAll()
 * @method Status[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Status>
 */
class StatusRepository extends AbstractRepository
{


}
