<?php
namespace Pulsestorm\HelloWorldMVVM\Block;
class Hello extends \Magento\Framework\View\Element\Template
{


    /**
     * @var \Trackingmore\Detrack\Model\UserFactory
     */
    protected $_userFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Pulsestorm\HelloWorldMVVM\Model\UserFactory $userFactory
    )
    {
        $this->_userFactory = $userFactory;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World');
    }


    public function _prepareLayout()
    {

//        die("fdf");
        //return parent::_prepareLayout();
    }

    public function getUserData() {
        $post = $this->_userFactory->create();

        $collection = $post->getCollection();

        $userArr = [];
        foreach ($collection as $item) {
            $userArr[] = $item->getData();
        }
//        var_dump($userArr);

        return $userArr;
    }

}