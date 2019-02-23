<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181216003224 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP renk, CHANGE title title VARCHAR(100) NOT NULL, CHANGE urun_id urun_id VARCHAR(100) NOT NULL, CHANGE price price VARCHAR(10) NOT NULL, CHANGE ozellik ozellik VARCHAR(150) NOT NULL, CHANGE beden bedeb VARCHAR(5) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product ADD renk VARCHAR(10) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE title title VARCHAR(25) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE urun_id urun_id VARCHAR(25) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE ozellik ozellik VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE price price VARCHAR(6) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE bedeb beden VARCHAR(5) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
