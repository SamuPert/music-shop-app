<?php

namespace App\Http\Controllers;

use App\Http\Middleware\StaffAuthMiddleware;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct() {
        $this->middleware(StaffAuthMiddleware::class);
    }

    public function homepage() {
        return view('adminStaff');
    }


}
