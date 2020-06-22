<?php

namespace App\Http\Middleware;

use Closure;

class StaffAuthMiddleware
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
        // Non è autenticato o non STAFF
        if( $request->user() == null || $request->user()->auth_level != 3 )
        {
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

        // Utente è staff
        return $next($request);
    }
}
