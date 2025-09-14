<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Exceptions\PostTooLargeException;

class HandlePostTooLarge
{
    public function handle($request, Closure $next)
    {
        try {
            return $next($request);
        } catch (PostTooLargeException $e) {
            return response()->json([
                'message' => 'File terlalu besar. Maksimal upload ' . ini_get('upload_max_filesize')
            ], 413);
        }
    }
}
