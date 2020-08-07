<?php
/**
 * Copyright © 2016 Bcnetcom. All rights reserved.
 * Updated by Ken
 */
namespace Fishdrowned\Layoutviewer\Observer;

use Magento\Framework\Event\ObserverInterface;

class CheckForLayoutDisplayRequest implements ObserverInterface
{
    const FLAG_SHOW_LAYOUT = 'showLayout';

    const FLAG_SHOW_LAYOUT_FORMAT = 'showLayoutFormat';
    const HTTP_HEADER_TEXT = 'Content-Type: text/plain';
    const HTTP_HEADER_HTML = 'Content-Type: text/html';
    const HTTP_HEADER_XML = 'Content-Type: text/xml';

    protected $_layout;

    public function __construct(\Magento\Framework\View\Element\Context $context, array $data = [])
    {
        $this->_layout = $context->getLayout();
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $is_set = array_key_exists(self::FLAG_SHOW_LAYOUT, $_GET);

        if ($is_set) {
            switch ($_GET[self::FLAG_SHOW_LAYOUT]) {
                case 'package':
                    $this->outputPackageLayout();
                    break;

                case 'page':
                    $this->outputPageLayout();
                    break;

                case 'handles':
                    $this->outputHandles();
                    break;
            }
        }
    }

    private function outputHandles()
    {
        $handles = $this->_layout->getUpdate()->getHandles();

        echo '<h1>', 'Handles For This Request', '</h1>' . "\n";
        echo '<ol>' . "\n";
        foreach ($handles as $handle) {
            echo '<li>', $handle, '</li>';
        }
        echo '</ol>' . "\n";
        die();
    }


    private function outputHeaders()
    {
        $is_set = array_key_exists(self::FLAG_SHOW_LAYOUT_FORMAT, $_GET);
        $header = self::HTTP_HEADER_XML;
        if ($is_set && 'text' == $_GET[self::FLAG_SHOW_LAYOUT_FORMAT]) {
            $header = self::HTTP_HEADER_TEXT;
        }
        header($header);
    }

    private function outputPageLayout()
    {
        $this->outputHeaders();
        die($this->_layout->getNode()->asXML());
    }

    private function outputPackageLayout()
    {
        //$update = $this->_layout->getUpdate();
        //$this->outputHeaders();
        //die($update->getPackageLayout()->asXML());
    }
}
