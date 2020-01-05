<?php
namespace App\Controller;

use Lightning\MVC\Output;
use Psr\Http\Message\ServerRequestInterface;

class HomeController
{
    public function helloWorldAction(ServerRequestInterface $request, Output $output)
    {
        $output->setData(
            Output::TYPE_JSON,
            ['code' => 200, 'data' => null, 'msg' => 'hello-world-from-lightning']
        );
        $output->send();
    }
}