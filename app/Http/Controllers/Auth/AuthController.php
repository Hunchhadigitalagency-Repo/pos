<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    function index(){
        return view('auth.login');
    }

    function test(){
        return 'test';
    }
}
