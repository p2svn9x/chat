<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SizeController extends AppController
{

    public function __construct()
    {
        if (empty($this->user)) {
            return redirect('/login');
        }
    }
}