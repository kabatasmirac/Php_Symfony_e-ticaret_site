<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181225114807 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE settings (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, aciklama VARCHAR(255) NOT NULL, keyword VARCHAR(255) NOT NULL, firmname VARCHAR(255) NOT NULL, adres VARCHAR(255) NOT NULL, fax VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, email VARCHAR(50) NOT NULL, smtpserver VARCHAR(255) NOT NULL, smtpmail VARCHAR(255) NOT NULL, smtppass VARCHAR(255) NOT NULL, smtpport INT NOT NULL, about_us VARCHAR(255) NOT NULL, contact VARCHAR(255) NOT NULL, referans VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE settings');
    }
}
