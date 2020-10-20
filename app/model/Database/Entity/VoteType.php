<?php declare(strict_types=1);

namespace App\Model\Database\Entity;

use App\Model\Database\Entity\Attributes\TId;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Model\Database\Repository\VoteTypeRepository")
 * @ORM\Table(name="`vote_type`")
 * @ORM\HasLifecycleCallbacks
 */
class VoteType extends AbstractEntity
{

	public const TYPE_VV = 'VV';
	public const TYPE_SO = 'SO';

	use TId;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $name;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255)
	 */
	private $description;

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return VoteType
	 */
	public function setName(string $name): VoteType
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 * @return VoteType
	 */
	public function setDescription(string $description): VoteType
	{
		$this->description = $description;
		return $this;
	}

}
