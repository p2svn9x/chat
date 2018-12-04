<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends ApiController
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        $email = $this->post('email');
        $password = $this->post('password');
        if (empty($email) || empty($password)) {
            $this->respondError('Email and password cannot be blank.');
        }
        $text = 'Email or password is wrong.';
        $result =  User::where('email', $email)->get()->first();

        if (empty($result)) {
            $this->respondError($text);
        }

        if (!Hash::check($password, $result->password)) {
            $this->respondError($text);
        }
        $result = User::where('id', $result->id)->get()->first()->toArray();
        $this->printData($result);
        Auth::attempt($result);
        $this->responData();
    }
}
