<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppController;
class ConsoleController extends AppController
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
        $this->checkLogin();
    }

    public function checkLogin()
    {
       if (empty($this->user)) {
           return redirect('login');
       }

    }

    public function viewConsole($view, $data = array())
    {
        return $this->loadView("console/".$view, $data);
    }



}