<?php

declare(strict_types=1);

namespace Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200820145545 extends AbstractMigration
{
	public function getDescription(): string
	{
		return 'Migrate votes from hlasovani';
	}

	public function up(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

		$this->addSql('
			INSERT INTO `proposal` (
			                        `id`,
			                        `title`,
			                        `text`,
			                        `vote_from`,
			                        `vote_to`,
			                        `created_at`,
			                        `author_id`,
			                        `vote_type_id`,
			                        `deleted`,
			                        `status_id`
			                        ) SELECT DISTINCT hla.id_navrh, "neznámý", "", now(),now(),now(),1980,1, 1,1
			FROM hlasovani hla
			WHERE NOT EXISTS (SELECT * FROM `proposal` WHERE hla.id_navrh = id)
		');

		$this->addSql('
			INSERT INTO vote(user_id,proposal_id,positive) SELECT hla.id_user,hla.id_navrh,
			           		CASE
           WHEN hla.hlasoval = "Ano" THEN 1
           ELSE 0
		END
			FROM hlasovani hla
');
		$this->addSql('DROP TABLE hlasovani;');
	}

	public function down(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('DELETE FROM `vote`');
	}
}
