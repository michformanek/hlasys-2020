<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Item;

/**
 * @method Item|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Item|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Item[] findAll()
 * @method Item[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Item>
 */
class ItemRepository extends AbstractRepository
{


}
