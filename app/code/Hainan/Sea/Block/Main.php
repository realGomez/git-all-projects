<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/10/30
 * Time: 15:52
 */

namespace Hainan\Sea\Block;


use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected $stationFactory;
    protected $objectManager;
    protected  $selfrepo;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Hainan\Sea\Model\StationFactory $stationFactory,
        \Magento\Cms\Model\PageRepository $pageRepository

    )
    {
        $this->stationFactory = $stationFactory;
        $this->objectManager = $objectManager;
        $this->selfrepo = $pageRepository;
        parent::__construct($context);
    }

    protected function _prepareLayout()
    {
//        $this->setTitle("Welcome to Hainan");

        $station = $this->stationFactory->create();
        $station->setData('item_text','Finish my Magento article')->save();

        $collections = $station->getCollection();


//        foreach($collections as $item)
//        {
//            var_dump('Item ID: ' . $item->getId());
//            var_dump($item->getData('item_text'));
//        }
//        var_dump($collections);

//        die("--");

//        $repo = $this->objectManager->get('Magento\Cms\Model\PageRepository');
//        $page = $repo->getById(1);
//        echo $page->getTitle(),"\n";


//        $page = $this->selfrepo->getById(1);
//        echo $page->getTitle(),"\n".'-------';
//
//        $station->load(1);
//        var_dump($station->getData());
//        var_dump($station->getItemText());
//        var_dump($station->getData('item_text'));
//        exit;


        $manage = $this->objectManager->get("Hainan\Sea\Block\ObjectManage");
        $this->setManage($manage->getYourMessage());


    }

    public function getYourMessage()
    {

        return "You are from main Main";
    }
}