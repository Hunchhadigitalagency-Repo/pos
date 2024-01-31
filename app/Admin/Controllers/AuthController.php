<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AuthController as BaseAuthController;

class AuthController extends BaseAuthController
{
    function login(){
        return view('auth.login');
    }
}
