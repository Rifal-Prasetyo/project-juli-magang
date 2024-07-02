<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class LoginController extends Controller
{
    //
    public function loginpage() {
        $web = [
            'page' => 'login'
        ];
        return view('auth.login', compact('web'));
    }

    public function registerPage() {
        $web = [
            'page' => 'register'
        ];
        return view('auth.register', compact('web'));
    }

    public function forgotPasswordPage() {
         $web = [
            'page' => 'Forgot Password'
        ];
        return view('auth.forgot_password', compact('web'));
    }
}
