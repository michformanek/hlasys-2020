<?php declare(strict_types=1);


namespace App\Domain\Api\Proposals\Response;


use App\Domain\Api\Users\Response\UserResDto;
use App\Model\Database\Entity\Proposal;
use App\Model\Utils\DateTime;

class ProposalResDto
{

	/** @var int */
	private $id;
	/** @var string */
	private $title;
	/** @var string */
	private $text;
	/** @var UserResDto */
	private $author;
	/**
	 * @var DateTime
	 */
	private $createdAt;

	public static function from(Proposal $proposal): self
	{
		$self = new self();
		$self->id = $proposal->getId();
		$self->author = UserResDto::from($proposal->getAuthor());
		$self->text = $proposal->getText();
		$self->title = $proposal->getTitle();
		$self->createdAt = $proposal->getCreatedAt();
		return $self;
	}

}
