<?php

declare(strict_types=1);

namespace Dashkit\Contracts;

use Illuminate\Http\Request;

interface Authentication
{
    public function authorize(Request $request): bool;
}
