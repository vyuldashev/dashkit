<?php

declare(strict_types=1);

namespace Dashkit;

use Closure;
use Illuminate\Http\Request;

class Authenticate
{
    private $manager;

    public function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$this->manager->getAuthentication()->authorize($request)) {
            abort(404);
        }

        return $next($request);
    }
}
