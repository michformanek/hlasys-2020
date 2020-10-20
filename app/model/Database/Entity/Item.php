<?php


namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TId;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\ItemRepository")
 * @ORM\Table(name="`item`")
 * @ORM\HasLifecycleCallbacks
 */
class Item
{

	use TId;

	/**
	 * @var Proposal
	 * @ORM\ManyToOne(targetEntity="Proposal")
	 * @ORM\JoinColumn(name="proposal_id", referencedColumnName="id")
	 */
	private $proposal;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $code;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $name;

	/**
	 * @var double
	 * @ORM\Column(type="decimal")
	 */
	private $price;

	/**
	 * @var integer
	 * @ORM\Column(type="integer")
	 */
	private $amount;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $url;

	/**
	 * @return Proposal
	 */
	public function getProposal(): Proposal
	{
		return $this->proposal;
	}

	/**
	 * @param Proposal $proposal
	 * @return Item
	 */
	public function setProposal(Proposal $proposal): Item
	{
		$this->proposal = $proposal;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCode(): string
	{
		return $this->code;
	}

	/**
	 * @param string $code
	 * @return Item
	 */
	public function setCode(string $code): Item
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return Item
	 */
	public function setName(string $name): Item
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPrice(): float
	{
		return $this->price;
	}

	/**
	 * @param float $price
	 * @return Item
	 */
	public function setPrice(float $price): Item
	{
		$this->price = $price;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAmount(): int
	{
		return $this->amount;
	}

	/**
	 * @param int $amount
	 * @return Item
	 */
	public function setAmount(int $amount): Item
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUrl(): string
	{
		return $this->url;
	}

	/**
	 * @param string $url
	 * @return Item
	 */
	public function setUrl(string $url): Item
	{
		$this->url = $url;
		return $this;
	}


}
