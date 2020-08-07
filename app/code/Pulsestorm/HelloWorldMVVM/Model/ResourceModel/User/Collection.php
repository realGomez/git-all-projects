<?php
namespace Pulsestorm\HelloWorldMVVM\Model\ResourceModel\User;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * 数据表 主键字段 ID
     *
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * 构造方法
     *
     * @return bool
     */
    protected function _construct()
    {
        $this->_init(
            'Pulsestorm\HelloWorldMVVM\Model\User',
            'Pulsestorm\HelloWorldMVVM\Model\ResourceModel\User'
        );

    }

}