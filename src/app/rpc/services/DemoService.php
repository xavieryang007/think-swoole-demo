<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 2019/12/19
 * Time: 下午3:32
 * Email:499873958@qq.com
 */

namespace app\rpc\services;


use app\rpc\interfaces\DemoInterface;

class DemoService implements DemoInterface
{

    public function inc($int)
    {
        // TODO: Implement inc() method.
        return ++$int;
    }
}