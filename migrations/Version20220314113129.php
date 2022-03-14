<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220314113129 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C9953FE4');
        $this->addSql('DROP INDEX IDX_6A2CA10C9953FE4 ON media');
        $this->addSql('ALTER TABLE media DROP personal_even_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emotion CHANGE type type VARCHAR(50) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE frise CHANGE name name VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE history_even CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE photo photo VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE video video VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE music music VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE media ADD personal_even_id INT DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE video video VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE music music VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C9953FE4 FOREIGN KEY (personal_even_id) REFERENCES personal_even (id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10C9953FE4 ON media (personal_even_id)');
        $this->addSql('ALTER TABLE personal_even CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE share CHANGE email_dest email_dest VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
