<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 17:05
 */

namespace Hainan\Sea\Model;


class Station  extends \Magento\Framework\Model\AbstractModel implements StationInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'hainan_sea_main';

    protected function _construct()
    {
        $this->_init('Hainan\Sea\Model\ResourceModel\Station');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}