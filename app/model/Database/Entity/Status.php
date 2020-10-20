<?php


namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TId;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\StatusRepository")
 * @ORM\Table(name="`status`")
 * @ORM\HasLifecycleCallbacks
 */
class Status extends AbstractEntity
{

	public const STATUS_NONE = 'Nic';
	public const STATUS_ORDERED = 'Objednáno';
	public const STATUS_READY = 'K převzetí';
	public const STATUS_DELIVERED = 'Předáno';

	use TId;

	/**
	 * @var string
	 * @ORM\Column(type="string")
	 */
	private $name;

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return Status
	 */
	public function setName(string $name): Status
	{
		$this->name = $name;
		return $this;
	}



}
