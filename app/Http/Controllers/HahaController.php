<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HahaController extends ApiController
{

    public function index(Request $rq)
    {

        $user = Auth::user();
        $this->printData($user);
        echo $user->id;
        echo "dsdsa";
        exit;
    }

    public function demo()
    {
        return $this->loadView('formLogin');
    }
}