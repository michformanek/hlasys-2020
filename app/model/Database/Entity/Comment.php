<?php declare(strict_types=1);

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="VoteTypeRepository")
 * @ORM\Table(name="`comment`")
 * @ORM\HasLifecycleCallbacks
 */
class Comment extends AbstractEntity
{

	use TId;
	use TCreatedAt;
	use TUpdatedAt;

	/**
	 * @var User
	 * @ORM\ManyToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

	/**
	 * @var Proposal
	 * @ORM\ManyToOne(targetEntity="Proposal")
	 * @ORM\JoinColumn(name="proposal_id", referencedColumnName="id")
	 */
	private $proposal;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=65535, nullable=true)
	 */
	private $text;

	/**
	 * @return User
	 */
	public function getUser(): User
	{
		return $this->user;
	}

	/**
	 * @param User $user
	 * @return Comment
	 */
	public function setUser(User $user): Comment
	{
		$this->user = $user;
		return $this;
	}

	/**
	 * @return Proposal
	 */
	public function getProposal(): Proposal
	{
		return $this->proposal;
	}

	/**
	 * @param Proposal $proposal
	 * @return Comment
	 */
	public function setProposal(Proposal $proposal): Comment
	{
		$this->proposal = $proposal;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getText(): string
	{
		return $this->text;
	}

	/**
	 * @param string $text
	 * @return Comment
	 */
	public function setText(string $text): Comment
	{
		$this->text = $text;
		return $this;
	}


}
