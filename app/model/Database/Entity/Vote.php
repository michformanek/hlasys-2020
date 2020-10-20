<?php declare(strict_types=1);

namespace App\Model\Database\Entity;


use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\VoteRepository")
 * @ORM\Table(name="`vote`")
 * @ORM\HasLifecycleCallbacks
 */
class Vote extends AbstractEntity
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
	 * @var boolean
	 * @ORM\Column(type="boolean")
	 */
	private $positive;

	/**
	 * @return Proposal
	 */
	public function getProposal(): Proposal
	{
		return $this->proposal;
	}

	/**
	 * @param Proposal $proposal
	 * @return Vote
	 */
	public function setProposal(Proposal $proposal): Vote
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
	 * @return Vote
	 */
	public function setUser(User $user): Vote
	{
		$this->user = $user;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isPositive(): bool
	{
		return $this->positive;
	}

	/**
	 * @param bool $positive
	 * @return Vote
	 */
	public function setPositive(bool $positive): Vote
	{
		$this->positive = $positive;
		return $this;
	}



}
