<?php

namespace App\Controller;

use function Lightning\msDate;

class ConsoleController
{
    public function outputAction($input)
    {
        echo "hello, {$input}\r\n";
    }
}