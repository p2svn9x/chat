<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
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
        $text = 'Email hoạc mật khẩu sai';
        $email = $this->post('email');
        $password = $this->post('password');
        if (empty($email) || empty($password)) {
            $this->respondError('Email và mật khẩu không được bỏ trống');
        }

        $result = $this->checkUser($email, $password);
        if (empty($result)) {
            $this->respondError($text);
        }

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            $this->respondError($text);
        }
        $this->responData(Auth::user());
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

    public function checkUser($email, $password)
    {
        $user = User::where([['email', $email]])->get(['password', 'status', 'block'])->first();//->toArray();
        if (!Hash::check($password, $user->password)) {
            return false;
        }

        if (empty($user->status)) {
            return $this->respondError("Tải khoản chưa được kích hoạt vùi lòng vào email để kích hoạt tài khoản");
        }

        if ($user->block == 1) {
            return $this->respondError("Tải khoản của bạn đan bị khóa ");
        }

        return true;
    }
}
