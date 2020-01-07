<?php
namespace App\Controller;

use Lightning\MVC\Output;
use Psr\Http\Message\ServerRequestInterface;
use function Lightning\config;

class HomeController
{
    public function helloWorldAction(ServerRequestInterface $request, Output $output)
    {
        $timeout = config()->get('web.timeout');
        $output->setData(
            Output::TYPE_JSON,
            ['code' => 200, 'data' => ['timeout' => $timeout], 'msg' => 'hello-world-from-lightning']
        );
        $output->send();
    }
}