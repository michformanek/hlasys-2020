<?php declare(strict_types=1);

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TId;
use App\Model\Security\Identity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\UserRepository")
 * @ORM\Table(name="`user`")
 * @ORM\HasLifecycleCallbacks
 */
class User extends AbstractEntity
{

	public const ROLE_ADMIN = 'admin';
	public const ROLE_SPRAVCE = 'spravce';
	public const ROLE_USER = 'user';

	use TId;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $username;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $email;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $role;


	public function getEmail(): string
	{
		return $this->email;
	}

	public function getUsername(): string
	{
		return $this->username;
	}

	public function getRole(): string
	{
		return $this->role;
	}

	public function setRole(string $role): void
	{
		$this->role = $role;
	}

	public function toIdentity(): Identity
	{
		return new Identity($this->getId(), [$this->role], [
			'email' => $this->email,
			'username' => $this->username,
		]);
	}

	public function setEmail(string $email)
	{
		$this->email = $email;
	}

}
