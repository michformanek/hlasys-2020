<?php declare(strict_types=1);

namespace App\Model\Database\Entity;


use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\WatchRepository")
 * @ORM\Table(name="`watch`")
 * @ORM\HasLifecycleCallbacks
 */
class Watch extends AbstractEntity
{

	use TId;
	use TCreatedAt;
	use TUpdatedAt;

	/**
	 * @var Proposal
	 * @ORM\ManyToOne(targetEntity="Proposal")
	 * @ORM\JoinColumn(name="proposal_id", referencedColumnName="id")
	 */
	private $proposal;

	/**
	 * @var User
	 * @ORM\ManyToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

	/**
	 * @return Proposal
	 */
	public function getProposal(): Proposal
	{
		return $this->proposal;
	}

	/**
	 * @param Proposal $proposal
	 * @return Watch
	 */
	public function setProposal(Proposal $proposal): Watch
	{
		$this->proposal = $proposal;
		return $this;
	}

	/**
	 * @return User
	 */
	public function getUser(): User
	{
		return $this->user;
	}

	/**
	 * @param User $user
	 * @return Watch
	 */
	public function setUser(User $user): Watch
	{
		$this->user = $user;
		return $this;
	}


}
