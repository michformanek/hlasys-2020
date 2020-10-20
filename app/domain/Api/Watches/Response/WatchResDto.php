<?php declare(strict_types=1);


namespace App\Domain\Api\Watches\Response;


use App\Domain\Api\Users\Response\UserResDto;
use App\Model\Database\Entity\Watch;

class WatchResDto
{

	/** @var int */
	public $id;
	/** @var UserResDto */
	public $user;
	/** @var int */
	public $proposalId;


	public static function from(Watch $watch): self
	{
		$self = new self();
		$self->id = $watch->getId();
		$self->user = UserResDto::from($watch->getUser());
		$self->proposalId = $watch->getProposal()->getId();
		return $self;
	}

}
