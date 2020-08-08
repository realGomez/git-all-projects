<?php

namespace Hainan\Sea\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultFactory;

     public function __construct(
         Context $context,
         PageFactory $pageFactory
     )
     {
         parent::__construct($context);
         $this->resultFactory = $pageFactory;

     }

     public function execute()
     {
         return $this->resultFactory->create();
     }
}