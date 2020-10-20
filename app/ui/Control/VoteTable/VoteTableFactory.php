<?php declare(strict_types=1);


namespace App\UI\Control\VoteTable;


use App\Model\Database\Entity\Proposal;

class VoteTableFactory
{

	public function createVoteTable(Proposal $proposal): VoteTable
	{
		return new VoteTable($proposal);
	}
}

