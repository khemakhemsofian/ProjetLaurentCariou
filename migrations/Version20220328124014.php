<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220328124014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce ADD design_id INT DEFAULT NULL, ADD graphism_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E5E41DC9B2 FOREIGN KEY (design_id) REFERENCES design (id)');
        $this->addSql('ALTER TABLE annonce ADD CONSTRAINT FK_F65593E57E009676 FOREIGN KEY (graphism_id) REFERENCES graphism (id)');
        $this->addSql('CREATE INDEX IDX_F65593E5E41DC9B2 ON annonce (design_id)');
        $this->addSql('CREATE INDEX IDX_F65593E57E009676 ON annonce (graphism_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E5E41DC9B2');
        $this->addSql('ALTER TABLE annonce DROP FOREIGN KEY FK_F65593E57E009676');
        $this->addSql('DROP INDEX IDX_F65593E5E41DC9B2 ON annonce');
        $this->addSql('DROP INDEX IDX_F65593E57E009676 ON annonce');
        $this->addSql('ALTER TABLE annonce DROP design_id, DROP graphism_id');
    }
}
