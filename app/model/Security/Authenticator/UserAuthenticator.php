<?php declare(strict_types = 1);

namespace App\Model\Security\Authenticator;

use App\Model\Database\Entity\User;
use App\Model\Database\EntityManager;
use App\Model\Exception\Runtime\AuthenticationException;
use Nette\Security\IAuthenticator;
use Nette\Security\IIdentity;

final class UserAuthenticator implements IAuthenticator
{

	/** @var EntityManager */
	private $em;

	public function __construct(EntityManager $em)
	{
		$this->em = $em;
	}

	/**
	 * @param string[] $credentials
	 * @throws AuthenticationException
	 */
	public function authenticate(array $credentials): IIdentity
	{
		[$id, $password] = $credentials;

		$user = $this->em->getUserRepository()->findOneBy(['id' => $id]);

		if (!$user) {
			throw new AuthenticationException('The username is incorrect.', self::IDENTITY_NOT_FOUND);
		}

		return $this->createIdentity($user);
	}

	protected function createIdentity(User $user): IIdentity
	{
		$this->em->flush();

		return $user->toIdentity();
	}

}
