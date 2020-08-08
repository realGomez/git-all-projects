<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/12/26
 * Time: 11:50
 */

namespace Hainan\Sea\Block;
use Magento\Framework\View\Element\Template;


class ArgumentReplace extends Template
{

    public $scaler1;
    public $scaler2;
    public $scaler3;

    public function __construct(
        $scaler1='foo',
        $scaler2=0,
        $scaler3 =false,
        \Magento\Framework\View\Element\Template\Context $context

    )
    {

        $this->scaler1 = $scaler1;
        $this->scaler2 = $scaler2;
        $this->scaler3 = $scaler3;
        parent::__construct($context);

    }


    protected function _prepareLayout()
    {
//      var_dump($this->scaler1);
    }
}