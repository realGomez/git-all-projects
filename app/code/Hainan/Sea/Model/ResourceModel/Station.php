<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 17:08
 */

namespace Hainan\Sea\Model\ResourceModel;


class Station extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('hainan_sea_main','hainan_sea_main_id');
    }
}