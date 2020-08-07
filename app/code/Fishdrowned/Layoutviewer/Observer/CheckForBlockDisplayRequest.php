<?php
/**
 * Copyright © 2016 Bcnetcom. All rights reserved.
 * Updated by Ken
 */
namespace Fishdrowned\Layoutviewer\Observer;

use Magento\Framework\Event\ObserverInterface;

class CheckForBlockDisplayRequest implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        if (!isset($_GET['displayblock']) && !is_file(BP . '/' . 'displayblock')) return;
        //if (!isset($_GET['displayblock'])) return;

        //$block = $observer->getEvent()->getBlock();
        $elementName = $observer->getEvent()->getElementName();//block name
        /* @var $layout \Magento\Framework\View\Layout\Interceptor */
        $layout = $observer->getEvent()->getLayout();
        /* @var $transportObject \Magento\Framework\DataObject */
        $transportObject = $observer->getEvent()->getTransport();

        if($layout->isBlock($elementName)){
            $block = $layout->getBlock($elementName);

            $additionalInfo = array();
            if($block instanceof \Magento\Cms\Block\Block){
                $additionalInfo[] = 'id = ' . $block->getBlockId();
            }

            $html = $transportObject->getOutput();
            $docType = '';
            if (strtolower(substr($html, 0, 14)) == '<!doctype html' && FALSE !== $pos = strpos($html, '>')) {
                $docType = substr($html, 0, $pos + 1);
                $html = substr($html, $pos + 1);
            }

            $tag = isset($_GET['explicit']) ? array('<pre>', '</pre>') : array('<!-- ', ' -->');
            $blockClass = $block->getType();// get_class($block)
            $blockTemplate = $block->getTemplate();

            $transportObject->setData('output', $docType . $tag[0] . $blockClass . ', ' . implode(', ', $additionalInfo)
                . ', ' . $elementName . ', ' . $blockTemplate . $tag[1] . $html
                . $tag[0] . 'end of block ' . $elementName . $tag[1]);

        }
    }
}
