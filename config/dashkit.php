<?php

return [

    // List of enabled kits
    'kits' => [
        Dashkit\Kits\PhpVersion::class,
        Dashkit\Kits\DiskUsage::class,
    ],

    // List of ips allowed to access routes
    'allowed_ips' => [
        '127.0.0.1',
    ],

];