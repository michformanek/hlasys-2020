<?php

declare(strict_types=1);

namespace Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200820145623 extends AbstractMigration
{
	public function getDescription(): string
	{
		return 'Fix character encodings in proposal';
	}

	public function up(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"ø","ř")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"¾","ž")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"¹","š")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"ì","ě")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"è","č")');

	}

	public function down(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"ř","ø")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"ž","¾")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"š","¹")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"ě","ì")');
		$this->addSql('UPDATE proposal SET title = REPLACE(title,"č","è")');
	}
}
