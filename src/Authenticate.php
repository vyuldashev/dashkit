<?php

declare(strict_types=1);

namespace Dashkit;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!in_array($request->ip(), config('dashkit.allowed_ips', []), true)) {
            abort(404);
        }

        return $next($request);
    }
}
