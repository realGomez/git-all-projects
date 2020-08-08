<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 15:52
 */

namespace Hainan\Sea\Block;


use Magento\Framework\View\Element\Template;

class Preferencea extends Template
{
    protected $stationFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Hainan\Sea\Model\StationFactory $stationFactory

    )
    {
        $this->stationFactory = $stationFactory;
        parent::__construct($context);
    }


    protected function _prepareLayout()
    {

    }

    public function sendMessage(){
        return 'Message from preference a!';
    }


}