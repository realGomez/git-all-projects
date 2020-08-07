<?php
namespace Pulsestorm\HelloWorldM\Block;
class Hello extends \Magento\Framework\View\Element\Template
{


    /**
     * @var \Trackingmore\Detrack\Model\UserFactory
     */
    protected $_userFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Pulsestorm\HelloWorldM\Model\UserFactory $userFactory
    )
    {
        $this->_userFactory = $userFactory;
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('content from block');
    }


    public function _prepareLayout()
    {

//        die("fdf");
        //return parent::_prepareLayout();
    }

    public function getUserData() {
        $post = $this->_userFactory->create();

//        $post = $post->load(1);

//        var_dump($post->getData("username"));
//
//        var_dump($post->getItemText());
//
//        var_dump($post->getData('username'));
//        exit;

//        $post->setData('password','bc123123')
//            ->save();
        $post->setUsername("real")
            ->save();
        $collection = $post->getCollection();
        //$collection->addFieldToFilter('username','zhangsan');
        //$collection->addOrder('id','desc');

//        $select = $collection->getSelect();


//        $select->where("username like ?",'%zhang%');


        $userArr = [];
        foreach ($collection as $item) {
            $userArr[] = $item->getData();
        }
//        var_dump($userArr);

        return $userArr;
    }

}