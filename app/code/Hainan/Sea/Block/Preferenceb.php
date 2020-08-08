<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 15:52
 */

namespace Hainan\Sea\Block;


class Preferenceb extends \Hainan\Sea\Block\Preferencea
{

//    public function __construct(
//        \Magento\Framework\View\Element\Template\Context $context,
//        \Hainan\Sea\Model\StationFactory $stationFactory
//
//    )
//    {
//        parent::__construct($context,$stationFactory);
//    }

    public  function sendMessage(){
        return 'Message from preference b';
    }

}