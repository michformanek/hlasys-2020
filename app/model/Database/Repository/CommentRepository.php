<?php declare(strict_types = 1);

namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Comment;

/**
 * @method Comment|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Comment|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Comment[] findAll()
 * @method Comment[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Comment>
 */
class CommentRepository extends AbstractRepository
{


}
