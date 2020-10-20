<?php

declare(strict_types=1);

namespace Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200820145546 extends AbstractMigration
{
	public function getDescription(): string
	{
		return 'Migrate items from navrh_polozky';
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
			                        `deleted`
			                        ) SELECT DISTINCT navrh.id_navrh, "neznámý", "", now(),now(),now(),1980,1, 1
			FROM navrh_polozky navrh
			WHERE NOT EXISTS (SELECT * FROM `proposal` WHERE navrh.id_navrh = id)
		');
		
		$this->addSql('
			INSERT INTO item(proposal_id,code,name,price,amount,url)
			SELECT navrh.id_navrh,navrh.kod,navrh.nazev,navrh.cena,navrh.pocet,navrh.url
			FROM navrh_polozky navrh
');
		$this->addSql('DROP TABLE navrh_polozky;');
	}

	public function down(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('DELETE FROM `item`');
	}
}
