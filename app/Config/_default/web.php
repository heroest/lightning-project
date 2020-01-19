<?php

return [
    'web' => [
        'timeout' => 30 //http请求超时时间
    ],
    'http_client' => [
        'timeout' => 30,
        'connection_timeout' => 12,
        'follow_redirects' => true //follow 302
    ]
];