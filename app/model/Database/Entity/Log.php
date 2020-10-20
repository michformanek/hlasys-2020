<?php declare(strict_types=1);

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\LogRepository")
 * @ORM\Table(name="`log`")
 * @ORM\HasLifecycleCallbacks
 */
class Log extends AbstractEntity
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
	 * @ORM\Column(type="string", length=255, nullable=FALSE)
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
	 * @return Proposal
	 */
	public function getProposal(): Proposal
	{
		return $this->proposal;
	}

	/**
	 * @return string
	 */
	public function getText(): string
	{
		return $this->text;
	}


}
