<?php declare(strict_types=1);


namespace App\UI\Control\CommentTable;


use App\Model\Database\Entity\Proposal;

class CommentTableFactory
{

	/**
	 * @param Proposal $proposal
	 * @return CommentTable
	 */
	public function createCommentTable(Proposal $proposal): CommentTable
	{
		return new CommentTable($proposal);
	}
}

