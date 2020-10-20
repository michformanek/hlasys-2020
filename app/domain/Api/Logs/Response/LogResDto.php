<?php declare(strict_types=1);


namespace App\Domain\Api\Logs\Response;


use App\Domain\Api\Users\Response\UserResDto;
use App\Model\Database\Entity\Log;
use App\Model\Utils\DateTime;

class LogResDto
{
	/** @var int */
	private $id;
	/** @var DateTime */
	private $created;
	/** @var string */
	private $text;
	/** @var UserResDto */
	private $user;
	/** @var int */
	private $proposalId;

	public static function from(Log $log): self
	{
		$self = new self();
		$self->id = $log->getId();
		$self->created = $log->getCreatedAt();
		$self->user = UserResDto::from($log->getUser());
		$self->proposalId = $log->getProposal()->getId();
		$self->text = $log->getText();
		return $self;
	}

}
