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
        if ( Auth::check() && $request()->user()->auth_level == 2 )
		return $next($request);
            
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
}
