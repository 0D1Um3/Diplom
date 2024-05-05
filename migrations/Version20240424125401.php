<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240424125401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0F9D86650F');
        $this->addSql('DROP INDEX IDX_6970EB0F9D86650F ON reviews');
        $this->addSql('ALTER TABLE reviews ADD rating INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sections RENAME INDEX idx_2b964398631f5bd6 TO IDX_2B964398A2D17367');
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0F9D86650F');
        $this->addSql('DROP INDEX IDX_6970EB0F9D86650F ON reviews');
    }
}
