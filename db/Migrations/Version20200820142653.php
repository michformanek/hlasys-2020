<?php

declare(strict_types=1);

namespace Database\Migrations;

use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Doctrine\Migrations\Exception\MigrationException;


final class Version20200820142653 extends AbstractMigration
{
	public function getDescription(): string
	{
		return 'Migrate proposals from navrh_hlasovani';
	}

	public function up(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

		$this->addSql('
			INSERT INTO `user` (`id`, `username`, `email`, `role`) SELECT DISTINCT hla.id_navrhovatele, "neznámý", "", "user"
			FROM navrh_hlasovani hla
			WHERE NOT EXISTS (SELECT * FROM `user`
      			WHERE hla.id_navrhovatele = id)
		');

		$this->addSql('
		INSERT INTO `proposal` (id,
                        title,
                        text,
                        vote_from,
                        vote_to,
                        created_at,
		                author_id,
		                deleted,
                        vote_type_id,
		                status_id)
		SELECT id,
       			subject,
       			popis_navrhu,
       			datum,
       			konec_hlasovani,
       			datum,
		       id_navrhovatele,
		CASE
           WHEN smaz = "Yes" THEN 1
           ELSE 0
		END,
       CASE
           WHEN rozhoduje = "VV" THEN 1
           ELSE 2
		END,
       CASE
           WHEN stav_zakazky = "Nic" THEN 1
           WHEN stav_zakazky = "Objednáno" THEN 2
           WHEN stav_zakazky = "K pøevzetí" THEN 3
           WHEN stav_zakazky = "Pøedáno" THEN 4
           ELSE 1
		END
		       FROM navrh_hlasovani
		');
	$this->addSql('DROP TABLE navrh_hlasovani');
	}

	public function down(Schema $schema): void
	{
		$this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
		$this->addSql('DELETE FROM `proposal`');
	}
}
