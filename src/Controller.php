<?php

declare(strict_types=1);

namespace Dashkit;

use Dashkit\Contracts\Kit;

class Controller
{
    private $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    public function all()
    {
        return collect($this->manager->getKits())
            ->transform(function (string $kit) {
                return resolve($kit);
            })
            ->mapWithKeys(function (Kit $kit) {
                return [$kit->getName() => $kit->getData()];
            });
    }
}
