<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class HahaController extends ApiController
{

    public function index(Request $rq)
    {
        echo "dsdsa";
        exit;
    }

    public function demo()
    {
        $user = Auth::user();
       $this->printData($user);
        if (Auth::check()) {
            // Đã đăng nhập.
            echo "vao";
        } else {
            echo "chay vap";
        }
        exit;
        $data =  User::where('email', 'langtuhoabinh2010@gmail.com')->get()->first();
        echo $data->email;
        $this->responData($data);
        return $this->loadView('demo1');
    }
}