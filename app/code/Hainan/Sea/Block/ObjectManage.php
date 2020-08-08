<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 15:52
 */

namespace Hainan\Sea\Block;


use Magento\Framework\View\Element\Template;

class ObjectManage extends Template
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
        $this->setTitle("Welcome to Manage");

    }

    public function getYourMessage()
    {

        return "You are frog  objectManage ";
    }
}