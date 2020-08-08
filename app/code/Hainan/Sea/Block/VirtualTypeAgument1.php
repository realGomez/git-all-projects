<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/12/26
 * Time: 14:14
 */

namespace Hainan\Sea\Block;


class VirtualTypeAgument1
{
    public $property_of_argument1_object;
    public function __construct(Argument2 $the_argument)
    {
        $this->property_of_argument1_object = $the_argument;
    }
}