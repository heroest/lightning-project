<?php

return [
    'web' => [
        'timeout' => 30 //http请求超时时间
    ],
    'http_client' => [
        'timeout' => 30,
        'follow_redirects' => true //follow redirect
    ],
    'coroutine' => [
        'max_time_idle' => 30, //in seconds
        'max_pool_size' => 16
    ]
];