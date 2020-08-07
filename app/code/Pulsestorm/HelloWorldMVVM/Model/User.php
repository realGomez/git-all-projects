<?php
namespace Pulsestorm\HelloWorldMVVM\Model;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

use Magento\Framework\Model\AbstractModel;

class User extends AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        //初始化资源模型
        $this->_init('Pulsestorm\HelloWorldMVVM\Model\ResourceModel\User');
    }

}