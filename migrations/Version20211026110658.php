<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211026110658 extends AbstractMigration
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
        $this->addSql('CREATE TABLE sipregs_triger (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voicemail_triger (id INT AUTO_INCREMENT NOT NULL, context VARCHAR(255) DEFAULT NULL, mailbox VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE sipregs CHANGE name name VARCHAR(80) NOT NULL, CHANGE fullcontact fullcontact VARCHAR(80) NOT NULL, CHANGE port port INT UNSIGNED NOT NULL, CHANGE username username VARCHAR(80) NOT NULL, CHANGE regseconds regseconds INT NOT NULL, CHANGE defaultuser defaultuser VARCHAR(80) NOT NULL');
        $this->addSql('ALTER TABLE voicemail_data CHANGE filename filename CHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (name VARCHAR(244) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, password VARCHAR(244) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE extensions');
        $this->addSql('DROP TABLE goip');
        $this->addSql('DROP TABLE sipregs_triger');
        $this->addSql('DROP TABLE voicemail_triger');
        $this->addSql('ALTER TABLE sipregs CHANGE name name VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE fullcontact fullcontact VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE port port INT UNSIGNED DEFAULT 0 NOT NULL, CHANGE username username VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE regseconds regseconds INT DEFAULT 0 NOT NULL, CHANGE defaultuser defaultuser VARCHAR(80) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE voicemail_data CHANGE filename filename CHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`');
    }
}
