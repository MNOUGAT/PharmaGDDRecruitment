<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211030121653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sylius_paypal_plugin_pay_pal_credentials (id VARCHAR(255) NOT NULL, payment_method_id INT DEFAULT NULL, access_token VARCHAR(255) NOT NULL, creation_time DATETIME NOT NULL, expiration_time DATETIME NOT NULL, INDEX IDX_C56F54AD5AA1164F (payment_method_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sylius_paypal_plugin_pay_pal_credentials ADD CONSTRAINT FK_C56F54AD5AA1164F FOREIGN KEY (payment_method_id) REFERENCES sylius_payment_method (id)');
        $this->addSql('ALTER TABLE sylius_adjustment ADD details LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('ALTER TABLE sylius_product ADD brand_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE sylius_product ADD CONSTRAINT FK_677B9B7444F5D008 FOREIGN KEY (brand_id) REFERENCES Brand (id)');
        $this->addSql('CREATE INDEX IDX_677B9B7444F5D008 ON sylius_product (brand_id)');
        $this->addSql('ALTER TABLE sylius_admin_user CHANGE password password VARCHAR(255) DEFAULT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6196A1F9BEA95C75 ON sylius_order (token_value)');
        $this->addSql('ALTER TABLE sylius_order_item ADD version INT DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE sylius_shop_user CHANGE password password VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE sylius_paypal_plugin_pay_pal_credentials');
        $this->addSql('ALTER TABLE sylius_adjustment DROP details');
        $this->addSql('ALTER TABLE sylius_admin_user CHANGE password password VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
        $this->addSql('DROP INDEX UNIQ_6196A1F9BEA95C75 ON sylius_order');
        $this->addSql('ALTER TABLE sylius_order_item DROP version');
        $this->addSql('ALTER TABLE sylius_product DROP FOREIGN KEY FK_677B9B7444F5D008');
        $this->addSql('DROP INDEX IDX_677B9B7444F5D008 ON sylius_product');
        $this->addSql('ALTER TABLE sylius_product DROP brand_id');
        $this->addSql('ALTER TABLE sylius_shop_user CHANGE password password VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
    }
}
