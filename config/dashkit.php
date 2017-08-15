<?php

return [

    // List of enabled kits
    'kits' => [
        Dashkit\Kits\PhpVersion::class,
        Dashkit\Kits\DiskUsage::class,
    ],

    // Determine authentication method for dashkit routes
    'authentication' => [
        'method' => Dashkit\Authentication\IpAuthentication::class,
        'options' => [
            'allowed_ips' => [
                '127.0.0.1',
            ],
        ],
    ],

];
