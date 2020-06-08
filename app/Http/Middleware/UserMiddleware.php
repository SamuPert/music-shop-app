<?php

namespace App\Http\Middleware;

use Closure;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() == null) {
            $messages = [
                [
                    'type' => 'warning',
                    'title' => 'Accesso non autorizzato',
                    'message' => 'Non si dispone dei privilegi adeguati per visualizzare questa pagina.'
                ]
            ];

            return redirect()
                ->route('catalogo')
                ->with('messages', $messages);

        }
        return $next($request);
    }
}


namespace App\Http\Middleware;

