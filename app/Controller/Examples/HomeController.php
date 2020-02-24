<?php

namespace App\Controller\Examples;

use Lightning\Web\{Input, Output};
use function Lightning\{await, container, config};

class HomeController
{
    public function helloWorldAction(Input $input, Output $output)
    {
        $name = $input->getPost('name', 'lightning');
        $output->setData(
            Output::TYPE_JSON,
            [
                'code' => 200, 
                'data' => ['ip' => $input->getClientIp()], 
                'msg' => "hello-world-from-{$name}"
            ]
        );
        $output->send();
    }
}
