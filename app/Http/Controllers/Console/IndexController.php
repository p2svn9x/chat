<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Routing\Redirector;
class IndexController extends ConsoleController
{

    public function index()
    {
      //  return redirect()->route('login');
        return $this->viewConsole('dashboard/index');
    }

}