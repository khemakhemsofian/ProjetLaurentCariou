<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401123727 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE design_categorie CHANGE design_name categorie_name VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE graphism_categorie CHANGE graphism_name categorie_name VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE design_categorie CHANGE categorie_name design_name VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE graphism_categorie CHANGE categorie_name graphism_name VARCHAR(100) NOT NULL');
    }
}
