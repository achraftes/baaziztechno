<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UppercaseMiddleware
{
    public function handle($request, Closure $next)
    {
        $query = $request->query();
        foreach ($query as $key => $value) {
            $query[$key] = strtoupper($value);
        }
        $request->merge(['query' => $query]);

        return $next($request);
    }
}
