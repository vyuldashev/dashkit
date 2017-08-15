<?php

declare(strict_types=1);

namespace Dashkit\Authentication;

use Illuminate\Http\Request;
use Dashkit\Contracts\Authentication;

class IpAuthentication implements Authentication
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function authorize(Request $request): bool
    {
        return in_array($request->ip(), $this->config['allowed_ips'], true);
    }
}
