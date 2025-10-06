<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251006132316 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE revendication ADD categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE revendication ADD CONSTRAINT FK_5B5CE1CABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_5B5CE1CABCF5E72D ON revendication (categorie_id)');
        $this->addSql('ALTER TABLE soutien ADD revendication_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE soutien ADD CONSTRAINT FK_99A7D321DFC1098F FOREIGN KEY (revendication_id) REFERENCES revendication (id)');
        $this->addSql('CREATE INDEX IDX_99A7D321DFC1098F ON soutien (revendication_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE revendication DROP FOREIGN KEY FK_5B5CE1CABCF5E72D');
        $this->addSql('DROP INDEX IDX_5B5CE1CABCF5E72D ON revendication');
        $this->addSql('ALTER TABLE revendication DROP categorie_id');
        $this->addSql('ALTER TABLE soutien DROP FOREIGN KEY FK_99A7D321DFC1098F');
        $this->addSql('DROP INDEX IDX_99A7D321DFC1098F ON soutien');
        $this->addSql('ALTER TABLE soutien DROP revendication_id');
    }
}
