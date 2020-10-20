<?php declare(strict_types=1);


namespace App\Domain\Api\Users\Response;


use App\Model\Database\Entity\User;

class UserResDto
{

	/** @var int */
	private $id;
	/** @var string */
	private $username;
	/** @var string */
	private $email;

	public static function from(User $user): self
	{
		$self = new self();
		$self->id = $user->getId();
		$self->username = $user->getUsername();
		$self->email = $user->getEmail();
		return $self;
	}

}
