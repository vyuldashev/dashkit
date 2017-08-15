<?php

declare(strict_types=1);

namespace Dashkit;

use Dashkit\Contracts\Kit;
use Dashkit\Contracts\Authentication;

class Manager
{
    private $kits;
    private $authentication;

    public function __construct(array $kits, Authentication $authentication)
    {
        $this->kits = $kits;
        $this->authentication = $authentication;
    }

    /**
     * @return Kit[]
     */
    public function getKits(): array
    {
        return $this->kits;
    }

    /**
     * @return Authentication
     */
    public function getAuthentication(): Authentication
    {
        return $this->authentication;
    }
}
