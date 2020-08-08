<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 16:09
 */

namespace Hainan\Sea\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable('hainan_sea_main')
        )->addColumn(
            'hainan_sea_main_id',
            Table::TYPE_INTEGER,
            null,
            array (
                'identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,
            ),
            'Entity ID'
        )->addColumn(
            'item_text',
            Table::TYPE_TEXT,
            255,
            array (
                'nullable' => false,
            ),
            'Text of the to do item'

        )->addColumn(
            'date_completed',
            Table::TYPE_DATETIME,
            null,
            array (
                'nullable' => true,
            ),
            'Date the item was completed'
        )->addColumn(
            'creation_time',
            Table::TYPE_TIMESTAMP,
            null,
            array (
            ),
            'Creation Time'
        )->addColumn(
            'update_time',
            Table::TYPE_TIMESTAMP,
            null,
            array (
            ),
            'Modification Time'
        )->addColumn(
            'is_active',
            Table::TYPE_SMALLINT,
            null,
            array (
                'nullable' => false,'default' => '1',
            ),
            'Is Active'
        );

        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }

}

