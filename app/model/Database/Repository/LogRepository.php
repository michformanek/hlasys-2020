<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Log;

/**
 * @method Log|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Log|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Log[] findAll()
 * @method Log[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Log>
 */
class LogRepository extends AbstractRepository
{


}
