<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\SizeController;
use Illuminate\Http\Request;

class IndexController extends SizeController
{

    public function index()
    {
        return $this->viewDashboard ('index');
    }
}
