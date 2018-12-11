<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\SizeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends SizeController
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index()
    {
        return $this->viewDashboard ('index');
    }

    //public function demo1
}
