<?php

declare(strict_types=1);

namespace Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200820144915 extends AbstractMigration
{
	public function getDescription(): string
	{
		return 'Migrate comments from hlasovani';
	}

	public function up(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

		$this->addSql('
			INSERT INTO `user` (`id`, `username`, `email`, `role`) SELECT DISTINCT hla.id_user, "neznámý", "", "user"
			FROM hlasovani hla
			WHERE NOT EXISTS (SELECT * FROM `user`
      			WHERE hla.id_user = id)
		');

		$this->addSql('
			INSERT INTO comment(user_id,proposal_id,text) SELECT hla.id_user,hla.id_navrh,hla.komentar_ne
			FROM hlasovani hla
			WHERE komentar_ne IS NOT NULL AND
			      komentar_ne != "" AND
			      EXISTS (SELECT * FROM proposal WHERE id = hla.id_navrh)
		');
	}

	public function down(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('DELETE FROM `comment`');
	}
}
