<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211004093727 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `general` (id INT AUTO_INCREMENT NOT NULL, contex VARCHAR(255) DEFAULT NULL, allowguest VARCHAR(255) DEFAULT NULL, allowoverlap VARCHAR(255) DEFAULT NULL, bindport INT DEFAULT NULL, bindaddr VARCHAR(255) DEFAULT NULL, srvlookup VARCHAR(255) DEFAULT NULL, disallow VARCHAR(255) DEFAULT NULL, allow VARCHAR(255) DEFAULT NULL, alwaysauthreject VARCHAR(255) DEFAULT NULL, canreinvite VARCHAR(255) DEFAULT NULL, nat VARCHAR(255) DEFAULT NULL, session_timers VARCHAR(255) DEFAULT NULL, localnet VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE task (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, body LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `general`');
        $this->addSql('DROP TABLE task');
    }
}
