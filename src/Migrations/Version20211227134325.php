<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211227134325 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE parte_diario (id INT AUTO_INCREMENT NOT NULL, empleado_id INT NOT NULL, area_id INT NOT NULL, fecha DATE NOT NULL, numero VARCHAR(255) NOT NULL, datos LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', INDEX IDX_663A2691952BE730 (empleado_id), INDEX IDX_663A2691BD0F409C (area_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parte_diario ADD CONSTRAINT FK_663A2691952BE730 FOREIGN KEY (empleado_id) REFERENCES empleados (id)');
        $this->addSql('ALTER TABLE parte_diario ADD CONSTRAINT FK_663A2691BD0F409C FOREIGN KEY (area_id) REFERENCES areas (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE parte_diario');
    }
}
