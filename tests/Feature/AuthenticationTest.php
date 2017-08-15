<?php

declare(strict_types=1);

namespace Dashkit\Tests;

class AuthenticationTest extends TestCase
{
    public function testNotAuthenticated()
    {
        $this->app['config']->set('dashkit.authentication.options', ['allowed_ips' => ['127.0.0.2']]);

        $this->get('/dashkit')->assertStatus(404);
    }

    public function testAuthenticated()
    {
        $this->app['config']->set('dashkit.authentication.options', ['allowed_ips' => ['127.0.0.1']]);

        $this->get('/dashkit')->assertSuccessful();
    }
}
