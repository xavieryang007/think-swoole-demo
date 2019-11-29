<?php
declare (strict_types=1);

namespace app\listener;

use think\Container;
use think\swoole\Websocket;

class WebsocketTest
{
    public $websocket = null;

    public function __construct(Container $container)
    {
        $this->websocket = $container->make(Websocket::class);
    }

    /**
     * 事件监听处理
     *
     * @return mixed
     */
    public function handle($event)
    {
        //$event 为从客户端接收的数据
        $this->websocket->emit("testcallback", ['aaaaa' => 1, 'getdata' => $event['asd']]);
    }
}
