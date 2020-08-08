<?php
/**
 * Created by PhpStorm.
 * User: XLY
 * Date: 2019/12/26
 * Time: 18:03
 */

namespace Hainan\Sea\Model;


class ValidationState extends \Magento\Framework\App\Arguments\ValidationState
{
    public function isValidationRequired()
    {
        return false;
    }
}
