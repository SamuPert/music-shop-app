<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Stmt\Return_;


class RegisterStaffController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Staff Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */


    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $dataStaff
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $dataStaff)
    {
        return Validator::make($dataStaff, [
            'first_name' => ['required', 'string', 'max:32'],
            'last_name' => ['required', 'string', 'max:32'],
            'username' => ['required', 'string', 'max:32', 'unique:users,username'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    public function registerStaff(Request $request)
    {
        $inputdata=array_merge($request->all(),['auth_level'=>3]);
        $validator=self::validator($inputdata);
        if($validator->fails()){
            return redirect()->route('admin.homepage')->withErrors($validator);
        }
        $user = User::create($inputdata);
        if ($user === null) {
            return redirect()->route('admin.homepage')->with('messages',[['title'=>'Registrazione fallita','type'=>'error','message'=>'Non è stato possibile registrare l\'utente']]);
        }
        return redirect()->route('admin.homepage')->with('messages',[['title'=>'Registrazione effettuata','type'=>'success','message'=>'Utente registrato correttamente']]);
    }

}
