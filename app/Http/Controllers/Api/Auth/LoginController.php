<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Exceptions\Generate;

class LoginController extends ApiController
{
    use AuthenticatesUsers;
    public function email()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $text = 'Email hoạc mật khẩu sai';
        $email = $this->post('email');
        $password = $this->post('password');
        if (empty($email) || empty($password)) {
            $this->respondError('Email và mật khẩu không được bỏ trống');
        }

        $result = $this->checkUser($email, $password);

        if ($result != 1) {
            return $this->respondError($result);
        }

        if (!Auth::attempt(['email' => $email, 'password' => $password])) {
            return $this->respondError($text);
        }

        $generate = new Generate();
        $user = User::find(Auth::user()->id);
        $user->token = $generate->token(64);
        $user->last_login = date('Y-m-d h:i:s');
        $user->save();
      /// dd(Auth::user());
       // return $this->responData(Auth::user());
        $responseData = array(
            'status' => 200,
            'message' => '',
            'code' => 0,
            'data' => null
        );
        return response($responseData, 200);
    }

    public function checkUser($email, $password)
    {
        $user = User::where([['email', $email]])->get(['password', 'status', 'block'])->first();//->toArray();
        if(empty($user)) {
            return 'Email hoạc mật khẩu sai';
        }

        if (!Hash::check($password, $user->password)) {

            return 'Email hoạc mật khẩu sai';
        }

        if (empty($user->status)) {
            return 'Tải khoản chưa được kích hoạt vùi lòng vào email để kích hoạt tài khoản';
        }

        if ($user->block == 1) {
            return 'Tải khoản của bạn đan bị khóa';
        }

        return 1;
    }
}
