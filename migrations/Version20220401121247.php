<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401121247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE design ADD title VARCHAR(100) NOT NULL, ADD desceiption VARCHAR(255) NOT NULL, ADD media VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE graphism ADD title VARCHAR(100) NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD media VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE design DROP title, DROP desceiption, DROP media');
        $this->addSql('ALTER TABLE graphism DROP title, DROP description, DROP media');
    }
}
