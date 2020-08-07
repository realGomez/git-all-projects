<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/12/25
 * Time: 16:38
 */

namespace Pulsestorm\HelloWorldMVVM\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


class InstallData implements InstallDataInterface
{
    /**
     * 安装方法
     *
     * @param ModuleDataSetupInterface $setup   数据表迁移接口
     * @param ModuleContextInterface   $context 上下文
     *
     * @return bool
     */
    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $data = [
            ['username' => 'zhangsan', 'password' => '123123', 'age' => '18', 'address' => 'shenzhen'],
            ['username' => 'lisi', 'password' => '456456456', 'age' => '28', 'address' => 'shanghai']
        ];
        foreach ($data as $bind) {
            $setup->getConnection()
                ->insertForce($setup->getTable('test_users'), $bind);
        }
    }

}