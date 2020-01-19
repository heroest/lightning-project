<?php

namespace App\Controller;

use Lightning\MVC\Output;
use Psr\Http\Message\ServerRequestInterface;
use function Lightning\{await, container, config};

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

    public function awaitHttpAction(ServerRequestInterface $request, Output $output)
    {
        $query = $request->getQueryParams();
        $url = $query['url'];

        $client = container()->get('http-client');
        $promise = $client->post($url, [], [], ['follow_redirects' => false]);
        $result = await($promise);
        $output->setData(
            Output::TYPE_JSON,
            ['code' => 200, 'data' => $result, 'msg' => 'baidu-response']
        );
        $output->send();
    }

    public function httpAction(ServerRequestInterface $request, Output $output)
    {
        $query = $request->getQueryParams();
        $url = $query['url'];

        $client = container()->get('http-client');
        $promise = $client->post($url, [], [], ['follow_redirects' => false]);
        $promise->then(function ($result) use ($output) {
            $output->setData(
                Output::TYPE_JSON,
                ['code' => 200, 'data' => $result, 'msg' => 'baidu-response']
            );
            $output->send();
        });
    }
}
