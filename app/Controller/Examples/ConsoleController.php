<?php

namespace App\Controller\Examples;

class ConsoleController
{
    public function outputAction($input)
    {
        echo "hello, {$input}\r\n";
    }
}