<?php declare(strict_types = 1);

namespace App\Model\Security;

use Nette\Security\Identity as NetteIdentity;

class Identity extends NetteIdentity
{

	public function getFullname(): string
	{
		return sprintf('%s %s %s', $this->data['username'] ?? '', $this->data['name'] ?? '', $this->data['surname'] ?? '');
	}

}
