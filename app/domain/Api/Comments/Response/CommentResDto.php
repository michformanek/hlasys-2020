<?php declare(strict_types = 1);

namespace App\Domain\Api\Comments\Response;

use App\Model\Database\Entity\Comment;
use App\Model\Database\Entity\User;

final class CommentResDto
{

	/** @var int */
	public $id;

	/** @var string */
	public $text;


	public static function from(Comment $comment): self
	{
		$self = new self();
		$self->id = $comment->getId();
		$self->text = $comment->getText();
//		$self->lastLoggedAt = $user->getLastLoggedAt();

		return $self;
	}

}
