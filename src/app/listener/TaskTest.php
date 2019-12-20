<?php
declare (strict_types = 1);

namespace app\listener;

class TaskTest
{
    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event)
    {
        var_dump('swoole task');
    }
}
