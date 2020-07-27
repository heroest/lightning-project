<?php

namespace App\Controller\Examples;

use Lightning\Web\{Input, Output};
use Lightning\Coroutine\SystemCall\GetCoroutineId;

class HomeController
{
    public function helloWorldAction(Input $input, Output $output)
    {
        $name = $input->post('name', 'lightning');
        $raw = $input->rawPost();
    
        $output->setFormat(Output::FORMAT_JSON)
            ->setContent([
                'code' => 200, 
                'data' => ['ip' => $input->getClientIp(), 'raw' => $raw],
                'msg' => "hello-world-from-{$name}"
            ])
            ->send();
    }

    public function coroutineAction(Input $input, Output $output)
    {
        $name = $input->query('name', 'neosteam');
        $coroutine_id = yield new GetCoroutineId();
        $output->setFormat(Output::FORMAT_JSON)
            ->setContent([
                'hello' => $name,
                'couroutine_id' => $coroutine_id
            ])
            ->send();
    }
}
