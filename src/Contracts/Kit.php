<?php

declare(strict_types=1);

namespace Dashkit\Contracts;

use Symfony\Component\Process\Process;

abstract class Kit
{
    public function getName(): string
    {
        return class_basename($this);
    }

    abstract public function getData();

    protected function createProcess(string $command): Process
    {
        return new Process($command);
    }
}
