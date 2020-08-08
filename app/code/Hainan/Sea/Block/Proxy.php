<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/12/26
 * Time: 15:04
 */

namespace Hainan\Sea\Block;

use Magento\Framework\View\Element\Template;

class Proxy extends Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Hainan\Sea\Block\ProxySlow $ProxSlow,
        \Hainan\Sea\Block\ProxyFast $proxFast

    )
    {
        parent::__construct($context);
        echo time();
        echo "proxy construct";

        die();
    }

    protected function _prepareLayout()
    {
        $this->setTitle("Welcome to proxy nan");
    }

}