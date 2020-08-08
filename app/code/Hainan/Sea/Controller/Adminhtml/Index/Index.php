<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/11/1
 * Time: 17:59
 */

namespace Hainan\Sea\Controller\Adminhtml\Index;


use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage =$this->resultPageFactory->create();
        $resultPage->setActiveMenu('Hainan_Sea::blog_manage');
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Hainan_Sea::sea_config');
    }

}