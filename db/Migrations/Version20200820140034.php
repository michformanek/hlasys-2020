<?php

declare(strict_types=1);

namespace Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20200820140034 extends AbstractMigration
{
	public function getDescription(): string
	{
		return 'Migrate users from temp_userdb';
	}

	public function up(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('INSERT INTO `user` (id, username, email, `role`) SELECT id, nick, email,"user"  FROM temp_userdb;');
		$this->addSql('DROP TABLE temp_userdb;');

	}

	public function down(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('DELETE FROM `user`');
	}
}
