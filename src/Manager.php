<?php

declare(strict_types=1);

namespace Dashkit;

use Dashkit\Contracts\Kit;

class Manager
{
    private $kits;

    public function __construct(array $kits)
    {
        $this->kits = $kits;
    }

    /**
     * @return Kit[]
     */
    public function getKits(): array
    {
        return $this->kits;
    }
}
