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
