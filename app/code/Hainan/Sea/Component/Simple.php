<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/12/26
 * Time: 18:16
 */

namespace Hainan\Sea\Component;


class  Simple extends \Magento\Ui\Component\AbstractComponent
{
    const NAME = 'hainan_simple';
    public function getComponentName()
    {
        return static::NAME;
    }

    public function getDataSourceData()
    {
        return ['data' => $this->getContext()->getDataProvider()->getData()];
    }


}