<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Restituisce il campo che va utilizzato per effettuare il login.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

//    public function handleLogin(Request $request)
//    {
//
//        $rules = [
//            'username'    => 'required',
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//        ];
//
//        $validator = Validator::make($request->all(), $rules);
//
//
//        if ($validator->fails()) {
//            return redirect()
//                ->route('login')
//                ->withErrors($validator)
//                ->withInput($request->all()->except('password'));
//        }
//
//        // create our user data for the authentication
//        $user_data = [
//            'username'      => $request->input('username'),
//            'password'      => $request->input('password'),
//        ];
//
//        // attempt to do the login
//        if (Auth::attempt($user_data)) {
//
//            // validation successful!
//            // redirect them to the secure section or whatever
//            // return Redirect::to('secure');
//            // for now we'll just echo success (even though echoing in a controller is bad)
//            echo 'SUCCESS!';
//
//        } else {
//
//            // validation not successful, send back to form
//            return redirect()
//                ->route('login')
//                ->withErrors(['Credenziali non valide.']);
//        }
//
//    }
}
