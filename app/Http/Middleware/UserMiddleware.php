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
        if ($request->user() == null || $request->user()->auth_level != 2 ) {
            if($request->user()->auth_level==4) {
                $messages = [
                    [
                        'type' => 'warning',
                        'title' => 'Hai privilegi Admin',
                        'message' => 'Gli utenti con privilegi Admin non possono modificare il profilo'
                    ]
                ];
            }else{
                $messages = [
                    [
                        'type' => 'warning',
                        'title' => 'Accesso non autorizzato',
                        'message' => 'Non si dispone dei privilegi adeguati per visualizzare questa pagina.'
                    ]
                ];
            }
            return redirect()
                ->route('catalogo')
                ->with('messages', $messages);

        }
        return $next($request);
    }
}


namespace App\Http\Middleware;

