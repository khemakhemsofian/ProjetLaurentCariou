<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330145817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE design ADD design_name VARCHAR(100) NOT NULL, DROP meca, DROP car, DROP guns');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE design ADD meca VARCHAR(50) NOT NULL, ADD car VARCHAR(50) NOT NULL, ADD guns VARCHAR(50) NOT NULL, DROP design_name');
    }
}
