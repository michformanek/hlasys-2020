<?php declare(strict_types=1);


namespace App\Domain\Api\Votes\Response;


use App\Domain\Api\Users\Response\UserResDto;
use App\Model\Database\Entity\Vote;

class VoteResDto
{
	/** @var int */
	public $id;
	/** @var UserResDto */
	public $user;
	/** @var boolean */
	public $positive;
	/** @var int */
	public $proposalId;

	public static function from(Vote  $vote) : self {
		$self = new self();
		$self->id = $vote->getId();
		$self->user = UserResDto::from($vote->getUser());
		$self->positive = $vote->isPositive();
		$self->proposalId = $vote->getProposal()->getId();
		return $self;
	}

}
