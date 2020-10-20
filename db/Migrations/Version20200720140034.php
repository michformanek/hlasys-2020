<?php

declare(strict_types=1);

namespace Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20200720140034 extends AbstractMigration
{
	public function getDescription(): string
	{
		return 'Prepare vote_types';
	}

	public function up(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('INSERT INTO `vote_type` (id, name, description) VALUES (1, "VV", "");');
		$this->addSql('INSERT INTO `vote_type` (id, name, description) VALUES (2, "SO", "");');
	}

	public function down(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('DELETE FROM `vote_type`');
	}
}
