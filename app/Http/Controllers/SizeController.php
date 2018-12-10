<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;

class SizeController extends AppController
{
    protected $user;
    public function __construct()
    {
       // parent::__construct();
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
        //$this->user = json_encode(Auth::user());

    }

    protected function viewDashboard($view = 'index', $data =  array())
    {
        $data['user'] = array(
            'username' => $this->user['username']
        );
        return $this->loadView('Dashboard/'.$view, $data);
    }


}