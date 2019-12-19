<?php
/**
 * Created by PhpStorm.
 * User: xavier
 * Date: 2019/12/19
 * Time: 下午3:27
 * Email:499873958@qq.com
 */

namespace app\rpc\services;


use app\rpc\interfaces\TestInterface;

class TestService implements TestInterface
{

    public function test($name)
    {
        // TODO: Implement test() method.
        return $name.'asd';
    }
}