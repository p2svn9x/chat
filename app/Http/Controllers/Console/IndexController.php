<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\View\View;

class IndexController extends ConsoleController
{

    public function Index()
    {
        return $this->viewConsole('dashboard/index');
    }

}