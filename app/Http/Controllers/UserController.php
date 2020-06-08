<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserMiddleware;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(UserMiddleware::class);
    }


    public function editprofile() {
        return view('showUser');
    }



}
