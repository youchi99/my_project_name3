<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211005083849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE extensions (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, host VARCHAR(255) DEFAULT NULL, secret VARCHAR(255) DEFAULT NULL, context VARCHAR(255) DEFAULT NULL, username VARCHAR(255) DEFAULT NULL, fullname VARCHAR(255) DEFAULT NULL, language VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE goip (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) DEFAULT NULL, context VARCHAR(255) DEFAULT NULL, secret VARCHAR(255) DEFAULT NULL, context2 VARCHAR(255) DEFAULT NULL, host VARCHAR(255) DEFAULT NULL, nat VARCHAR(255) DEFAULT NULL, canrienvite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE extensions');
        $this->addSql('DROP TABLE goip');
    }
}
