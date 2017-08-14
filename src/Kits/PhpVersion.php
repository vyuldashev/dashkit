<?php

declare(strict_types=1);

namespace Dashkit\Kits;

use Dashkit\Contracts\Kit;

class PhpVersion extends Kit
{
    public function getData(): string
    {
        return phpversion();
    }
}
