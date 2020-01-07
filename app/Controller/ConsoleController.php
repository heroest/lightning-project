<?php

namespace App\Controller;

class ConsoleController
{
    public function outputAction($input)
    {
        echo "hello, {$input}\r\n";
    }
}