<?php

declare(strict_types=1);

namespace Dashkit\Tests;

use Dashkit\DashkitServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * Get the service providers for the package.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [DashkitServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('dashkit', [
            'kits' => [
                \Dashkit\Kits\PhpVersion::class,
            ],
            'allowed_ips' => [
                '127.0.0.1',
            ],
        ]);
    }
}