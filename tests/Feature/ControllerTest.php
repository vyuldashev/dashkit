<?php

declare(strict_types=1);

namespace Dashkit\Tests\Feature;

use Dashkit\Tests\TestCase;

class ControllerTest extends TestCase
{
    public function testAll()
    {
        $expected = ['PhpVersion', 'DiskUsage'];

        $this->get('/dashkit/')
            ->assertSuccessful()
            ->assertJsonStructure($expected);
    }
}
