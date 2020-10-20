<?php declare(strict_types=1);

namespace App\Model\Database;

use App\Model\Database\Entity\Comment;
use App\Model\Database\Entity\Item;
use App\Model\Database\Entity\Log;
use App\Model\Database\Entity\Proposal;
use App\Model\Database\Entity\Status;
use App\Model\Database\Entity\User;
use App\Model\Database\Entity\VoteType;
use App\Model\Database\Entity\Watch;
use App\Model\Database\Repository\StatusRepository;
use App\Model\Database\Repository\VoteTypeRepository;
use App\Model\Database\Repository\LogRepository;
use App\Model\Database\Repository\ProposalRepository;
use App\Model\Database\Repository\UserRepository;
use App\Model\Database\Repository\VoteRepository;
use App\Model\Database\Repository\WatchRepository;

/**
 * @mixin EntityManager
 */
trait TRepositories
{

	public function getUserRepository(): UserRepository
	{
		return $this->getRepository(User::class);
	}

	public function getCommentRepository(): VoteTypeRepository
	{
		return $this->getRepository(Comment::class);
	}

	public function getLogRepository(): LogRepository
	{
		return $this->getRepository(Log::class);
	}

	public function getWatchRepository(): WatchRepository
	{
		return $this->getRepository(Watch::class);
	}

	public function getProposalRepository(): ProposalRepository
	{
		return $this->getRepository(Proposal::class);
	}

	public function getVoteRepository(): VoteRepository
	{
		return $this->getRepository(VoteRepository::class);
	}

	public function getVoteTypeRepository(): VoteRepository
	{
		return $this->getRepository(VoteType::class);
	}

	public function getItemRepository(): VoteRepository
	{
		return $this->getRepository(Item::class);
	}

	public function getStatusRepository(): StatusRepository
	{
		return $this->getRepository(Status::class);
	}

}
