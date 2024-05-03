<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240424093921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, city_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_sport (id INT AUTO_INCREMENT NOT NULL, sport_name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0F9D86650F');
        $this->addSql('DROP INDEX IDX_6970EB0F9D86650F ON reviews');
        $this->addSql('ALTER TABLE reviews ADD CONSTRAINT FK_6970EB0F9D86650F FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_6970EB0F9D86650F ON reviews (user_id)');
        $this->addSql('ALTER TABLE sections ADD cities_id INT NOT NULL, ADD types_sport_id INT NOT NULL');
        $this->addSql('ALTER TABLE sections ADD CONSTRAINT FK_2B964398CAC75398 FOREIGN KEY (cities_id) REFERENCES city (id)');
        $this->addSql('ALTER TABLE sections ADD CONSTRAINT FK_2B964398A2D17367 FOREIGN KEY (types_sport_id) REFERENCES type_sport (id)');
        $this->addSql('CREATE INDEX IDX_2B964398CAC75398 ON sections (cities_id)');
        $this->addSql('CREATE INDEX IDX_2B964398A2D17367 ON sections (types_sport_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sections DROP FOREIGN KEY FK_2B964398CAC75398');
        $this->addSql('ALTER TABLE sections DROP FOREIGN KEY FK_2B964398A2D17367');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE type_sport');
        $this->addSql('DROP INDEX IDX_2B964398CAC75398 ON sections');
        $this->addSql('DROP INDEX IDX_2B964398A2D17367 ON sections');
        $this->addSql('ALTER TABLE sections DROP cities_id, DROP types_sport_id');
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0F9D86650F');
        $this->addSql('DROP INDEX IDX_6970EB0F9D86650F ON reviews');
        $this->addSql('ALTER TABLE reviews CHANGE user_id_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE reviews ADD CONSTRAINT FK_6970EB0F9D86650F FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_6970EB0F9D86650F ON reviews (user_id)');
    }
}
