<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/12/26
 * Time: 15:04
 */

namespace Hainan\Sea\Block;


class ProxySlow
{
    public function __construct()
    {
        echo time();
        echo "Constructing slowLoad Object","\n";
//        sleep(10);
    }

}