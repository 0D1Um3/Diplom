<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240503103738 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, types_sport_id INT NOT NULL, name VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, INDEX IDX_BFDD3168631F5BD6 (types_sport_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE images (id INT AUTO_INCREMENT NOT NULL, articles_id INT DEFAULT NULL, photo_filename VARCHAR(255) DEFAULT NULL, INDEX IDX_E01FBE6A1EBAF6CC (articles_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168631F5BD6 FOREIGN KEY (types_sport_id) REFERENCES type_sport (id)');
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6A1EBAF6CC FOREIGN KEY (articles_id) REFERENCES articles (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168631F5BD6');
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6A1EBAF6CC');
        $this->addSql('DROP TABLE articles');
        $this->addSql('DROP TABLE images');
    }
}
