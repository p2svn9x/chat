<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppController;

class ConsoleController extends AppController
{
    protected $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if (empty($this->user)) {

                return redirect()->route('login');
            }
            return $next($request);
        });

    }

    public function viewConsole($view, $data = array())
    {
        $data['user'] = $this->user;
        //$this->printData($data['user']->email);
        return $this->loadView("console/" . $view, $data);
    }


}