<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220401121927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE design_categorie (id INT AUTO_INCREMENT NOT NULL, design_name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE graphism_categorie (id INT AUTO_INCREMENT NOT NULL, graphism_name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE design ADD categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE design ADD CONSTRAINT FK_CD4F5A30BCF5E72D FOREIGN KEY (categorie_id) REFERENCES design_categorie (id)');
        $this->addSql('CREATE INDEX IDX_CD4F5A30BCF5E72D ON design (categorie_id)');
        $this->addSql('ALTER TABLE graphism ADD categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE graphism ADD CONSTRAINT FK_7004936ABCF5E72D FOREIGN KEY (categorie_id) REFERENCES graphism_categorie (id)');
        $this->addSql('CREATE INDEX IDX_7004936ABCF5E72D ON graphism (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE design DROP FOREIGN KEY FK_CD4F5A30BCF5E72D');
        $this->addSql('ALTER TABLE graphism DROP FOREIGN KEY FK_7004936ABCF5E72D');
        $this->addSql('DROP TABLE design_categorie');
        $this->addSql('DROP TABLE graphism_categorie');
        $this->addSql('DROP INDEX IDX_CD4F5A30BCF5E72D ON design');
        $this->addSql('ALTER TABLE design DROP categorie_id');
        $this->addSql('DROP INDEX IDX_7004936ABCF5E72D ON graphism');
        $this->addSql('ALTER TABLE graphism DROP categorie_id');
    }
}
