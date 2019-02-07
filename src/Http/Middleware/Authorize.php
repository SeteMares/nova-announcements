<?php

namespace SeteMares\NovaNotifications\Http\Middleware;

use SeteMares\NovaNotifications\NovaNotifications;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaNotifications::class)->authorize($request) ? $next($request) : abort(403);
    }
}
