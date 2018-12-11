<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\Generate;

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
        //$this->middleware('guest')->except('logout');
    }

    public function formLogin()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        return View('auth/login');
    }

    public function login()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $text = 'Email or password is wrong.';
        $email = $this->post('email');
        $password = $this->post('password');
        if (empty($email) || empty($password)) {
            $this->respondError('Email and password cannot be blank.');
        }

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            $this->respondError($text);
        }

        $generate = new Generate();
        $user = User::find(Auth::user()->id);
        $user->token = $generate->token(64);
        $user->last_login = date('Y-m-d h:i:s');
        $user->save();
        $this->respondLogin(Auth::user());
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
