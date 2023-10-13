<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231011133953 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE photos ADD filme_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D9E6E418AD FOREIGN KEY (filme_id) REFERENCES filme (id)');
        $this->addSql('CREATE INDEX IDX_876E0D9E6E418AD ON photos (filme_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D9E6E418AD');
        $this->addSql('DROP INDEX IDX_876E0D9E6E418AD ON photos');
        $this->addSql('ALTER TABLE photos DROP filme_id');
    }
}
