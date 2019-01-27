<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

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

       echo Hash::make("12345");
       exit;
    }

    public function demo1()
    {
        return Response::json(['hello' => "dsd"],201);
    }
}