<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330150048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE graphism ADD graphism_name VARCHAR(100) NOT NULL, DROP stiker, DROP motion, DROP overlay, DROP logo, DROP banner, DROP custom_clothe');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE graphism ADD stiker VARCHAR(50) NOT NULL, ADD motion VARCHAR(50) NOT NULL, ADD overlay VARCHAR(50) NOT NULL, ADD logo VARCHAR(50) NOT NULL, ADD banner VARCHAR(50) NOT NULL, ADD custom_clothe VARCHAR(50) NOT NULL, DROP graphism_name');
    }
}
