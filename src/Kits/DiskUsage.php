<?php

declare(strict_types=1);

namespace Dashkit\Kits;

use Dashkit\Contracts\Kit;

class DiskUsage extends Kit
{
    public function getData()
    {
        $total = disk_total_space('/');
        $free = disk_free_space('/');

        return round(($total - $free) / $total * 100, 2);
    }
}
