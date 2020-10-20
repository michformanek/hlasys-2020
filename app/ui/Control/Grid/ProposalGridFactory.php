<?php declare(strict_types = 1);

namespace App\UI\Control\Grid;

use Doctrine\ORM\QueryBuilder;

final class ProposalGridFactory
{

	private function create($queryBuilder): ProposalGrid
	{
		return new ProposalGrid($queryBuilder);
	}

	public function fromQueryBuilder(QueryBuilder $queryBuilder): ProposalGrid
	{
		return $this->create($queryBuilder);
	}

}
