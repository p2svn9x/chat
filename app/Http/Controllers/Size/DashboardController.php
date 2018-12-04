<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\SizeController;

use Illuminate\Http\Request;

class DashboardController extends SizeController
{

    public function index()
    {
        $this->loadView('');
    }
}
