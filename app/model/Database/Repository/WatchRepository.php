<?php declare(strict_types = 1);


namespace App\Model\Database\Repository;


use App\Model\Database\Entity\Watch;

/**
 * @method Watch|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Watch|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Watch[] findAll()
 * @method Watch[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Watch>
 */
class WatchRepository extends AbstractRepository
{

}
