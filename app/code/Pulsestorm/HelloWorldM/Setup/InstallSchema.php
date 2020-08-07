<?php

namespace Pulsestorm\HelloWorldM\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface   $setup   数据表迁移接口
     * @param ModuleContextInterface $context 上下文
     *
     * @return bool
     */
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        //获取安装器
        $installer = $setup;

        //开始数据库安装
        $installer->startSetup();

        //安装前删除该表
        $installer->getConnection()->dropTable($installer->getTable('test_users'));

        // test_users 表
        if (!$installer->tableExists('test_users')) {
            $table = $installer->getConnection()
                ->newTable($installer->getTable('test_users'))
                ->addColumn(
                    'id',
                    Table::TYPE_INTEGER,
                    null,
                    ['identity' => true, 'nullable' => false, 'primary' => true],
                    'users ID'
                )
                ->addColumn('username', Table::TYPE_TEXT, 50, ['nullable' => false])
                ->addColumn('password', Table::TYPE_TEXT, 255, ['nullable' => false])
                ->addColumn('age', Table::TYPE_INTEGER, 255, [])
                ->addColumn('address', Table::TYPE_TEXT, 255, [])
                ->setComment('users table');
            $installer->getConnection()->createTable($table);

        }

        //结束数据库安装
        $installer->endSetup();
    }

}