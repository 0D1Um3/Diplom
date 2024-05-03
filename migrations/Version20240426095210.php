<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240426095210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE sections RENAME INDEX idx_2b964398a2d17367 TO IDX_2B964398631F5BD6');
        $this->addSql('ALTER TABLE type_sport ADD entries INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0F9D86650F');
        $this->addSql('DROP INDEX IDX_6970EB0F9D86650F ON reviews');
    }
}
