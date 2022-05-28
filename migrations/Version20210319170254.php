<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210319170254 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, roles VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE oferta_candidat MODIFY oferta_id INT NOT NULL');
        $this->addSql('ALTER TABLE oferta_candidat DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE oferta_candidat CHANGE oferta_id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE oferta_candidat ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE oferta_candidat MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE oferta_candidat DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE oferta_candidat CHANGE id oferta_id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE oferta_candidat ADD PRIMARY KEY (oferta_id)');
    }
}
