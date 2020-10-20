<?php declare(strict_types = 1);


namespace App\Model\Database\Repository;

use App\Model\Database\Entity\Proposal;

/**
 * @method Proposal|NULL find($id, ?int $lockMode = NULL, ?int $lockVersion = NULL)
 * @method Proposal|NULL findOneBy(array $criteria, array $orderBy = NULL)
 * @method Proposal[] findAll()
 * @method Proposal[] findBy(array $criteria, array $orderBy = NULL, ?int $limit = NULL, ?int $offset = NULL)
 * @extends AbstractRepository<Proposal>
 */
class ProposalRepository extends AbstractRepository
{

}
