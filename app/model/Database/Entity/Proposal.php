<?php declare(strict_types=1);

namespace App\Model\Database\Entity;


use App\Model\Database\Entity\Attributes\TCreatedAt;
use App\Model\Database\Entity\Attributes\TId;
use App\Model\Database\Entity\Attributes\TUpdatedAt;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\ProposalRepository")
 * @ORM\Table(name="`proposal`", indexes={@ORM\Index(columns={"text", "title"}, flags={"fulltext"})})
 * @ORM\HasLifecycleCallbacks
 */
class Proposal extends AbstractEntity
{

	use TId;
	use TCreatedAt;
	use TUpdatedAt;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255, nullable=FALSE)
	 */
	private $title;

	/**
	 * @var string
	 * @ORM\Column(type="text", length=65535, nullable=true)
	 */
	private $text;

	/**
	 * @var boolean
	 * @ORM\Column(type="boolean")
	 */
	private $deleted;

	/**
	 * @var User
	 * @ORM\ManyToOne(targetEntity="User")
	 * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
	 */
	private $author;

	/**
	 * @var DateTime
	 * @ORM\Column(type="datetime")
	 */
	private $voteFrom;

	/**
	 * @var DateTime
	 * @ORM\Column(type="datetime")
	 */
	private $voteTo;

	/**
	 * @var VoteType
	 * @ORM\ManyToOne(targetEntity="VoteType")
	 * @ORM\JoinColumn(name="vote_type_id", referencedColumnName="id")
	 */
	private $voteType;

	/**
	 * @var Status.
	 * @ORM\ManyToOne(targetEntity="Status",fetch="EAGER")
	 * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
	 */
	private $status;

	/**
	 * @var Comment[]
	 * @ORM\OneToMany(targetEntity="Comment", mappedBy="proposal")
	 */
	private $comments;

	/**
	 * @var Item[]
	 * @ORM\OneToMany(targetEntity="Item", mappedBy="proposal")
	 */
	private $items;

	/**
	 * @var Log[]
	 * @ORM\OneToMany(targetEntity="Log", mappedBy="proposal")
	 */
	private $logs;

	/**
	 * @var Watch[]
	 * @ORM\OneToMany(targetEntity="Watch", mappedBy="proposal")
	 */
	private $watches;

	/**
	 * @var Vote[]
	 * @ORM\OneToMany(targetEntity="Vote", mappedBy="proposal")
	 */
	private $votes;

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return Proposal
	 */
	public function setTitle(string $title): Proposal
	{
		$this->title = $title;
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
	 * @return Proposal
	 */
	public function setText(string $text): Proposal
	{
		$this->text = $text;
		return $this;
	}

	/**
	 * @return User
	 */
	public function getAuthor(): User
	{
		return $this->author;
	}

	/**
	 * @param User $author
	 * @return Proposal
	 */
	public function setAuthor(User $author): Proposal
	{
		$this->author = $author;
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getVoteFrom(): DateTime
	{
		return $this->voteFrom;
	}

	/**
	 * @param DateTime $voteFrom
	 * @return Proposal
	 */
	public function setVoteFrom(DateTime $voteFrom): Proposal
	{
		$this->voteFrom = $voteFrom;
		return $this;
	}

	/**
	 * @return DateTime
	 */
	public function getVoteTo(): DateTime
	{
		return $this->voteTo;
	}

	/**
	 * @param DateTime $voteTo
	 * @return Proposal
	 */
	public function setVoteTo(DateTime $voteTo): Proposal
	{
		$this->voteTo = $voteTo;
		return $this;
	}

	/**
	 * @return Comment[]
	 */
	public function getComments()
	{
		return $this->comments;
	}

	/**
	 * @param Comment[] $comments
	 * @return Proposal
	 */
	public function setComments(array $comments): Proposal
	{
		$this->comments = $comments;
		return $this;
	}

	/**
	 * @return Log[]
	 */
	public function getLogs(): array
	{
		return $this->logs;
	}

	/**
	 * @param Log[] $logs
	 * @return Proposal
	 */
	public function setLogs(array $logs): Proposal
	{
		$this->logs = $logs;
		return $this;
	}

	/**
	 * @return Watch[]
	 */
	public function getWatches(): array
	{
		return $this->watches;
	}

	/**
	 * @param Watch[] $watches
	 * @return Proposal
	 */
	public function setWatches(array $watches): Proposal
	{
		$this->watches = $watches;
		return $this;
	}

	/**
	 * @return VoteType
	 */
	public function getVoteType(): VoteType
	{
		return $this->voteType;
	}

	/**
	 * @param VoteType $voteType
	 * @return Proposal
	 */
	public function setVoteType(VoteType $voteType): Proposal
	{
		$this->voteType = $voteType;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isDeleted(): bool
	{
		return $this->deleted;
	}

	/**
	 * @param bool $deleted
	 * @return Proposal
	 */
	public function setDeleted(bool $deleted): Proposal
	{
		$this->deleted = $deleted;
		return $this;
	}

	/**
	 * @return Vote[]
	 */
	public function getVotes()
	{
		return $this->votes;
	}

	/**
	 * @param Vote[] $votes
	 * @return Proposal
	 */
	public function setVotes(array $votes): Proposal
	{
		$this->votes = $votes;
		return $this;
	}

	/**
	 * @return Item[]
	 */
	public function getItems()
	{
		return $this->items;
	}

	/**
	 * @param Item[] $items
	 * @return Proposal
	 */
	public function setItems(array $items): Proposal
	{
		$this->items = $items;
		return $this;
	}

	/**
	 * @return Status
	 */
	public function getStatus(): Status
	{
		return $this->status;
	}

	/**
	 * @param Status $status
	 * @return Proposal
	 */
	public function setStatus(Status $status): Proposal
	{
		$this->status = $status;
		return $this;
	}


}
