<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 17:22
 */

namespace Hainan\Sea\Model\ResourceModel\Station;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Hainan\Sea\Model\Station','Hainan\Sea\Model\ResourceModel\Station');
    }
}