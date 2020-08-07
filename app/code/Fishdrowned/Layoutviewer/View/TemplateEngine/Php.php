<?php

namespace Fishdrowned\Layoutviewer\View\TemplateEngine;
use Magento\Framework\View\Element\BlockInterface as BlockInterface;
class Php extends \Magento\Framework\View\TemplateEngine\Php{

    public function render(BlockInterface $block, $fileName, array $dictionary = [])
    {
        $output = parent::render($block,$fileName,$dictionary);
        if (!isset($_GET['displayblock']) && !is_file(BP . '/' . 'displayblock'))
            return $output;
        /* @var $layout \Magento\Framework\View\Layout\Interceptor */
        $layout = $block->getLayout();
        $elementName = $block->getNameInLayout();
        if($layout){
            $additionalInfo = array();
            if($block instanceof \Magento\Cms\Block\Block){
                $additionalInfo[] = 'id = ' . $block->getBlockId();
            }

            $tag = isset($_GET['explicit']) ? array('<pre>', '</pre>') : array('<!-- ', ' -->');
            $blockClass = $block->getType();// get_class($block)
            $blockTemplate = $block->getTemplate();

            $html = $output;
            $docType = '';
            if (strtolower(substr($html, 0, 14)) == '<!doctype html' && FALSE !== $pos = strpos($html, '>')) {
                $docType = substr($html, 0, $pos + 1);
                $html = substr($html, $pos + 1);
            }

            $output = $docType . $tag[0] . $blockClass . ', ' . implode(', ', $additionalInfo)
                . ', ' . $elementName . ', ' . $blockTemplate . $tag[1] . $html
                . $tag[0] . 'end of block ' . $elementName . $tag[1];
        }
        return $output;
    }

}