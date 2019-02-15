<?php

namespace App\Http\Controllers\Console\Products;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Console\ConsoleController;
use App\Models\Category;
class IndexController extends ConsoleController
{

    public function index()
    {
        return $this->viewConsole('products/list');
    }

    public function add($id = null)
    {
        return $this->viewConsole('products/add');
    }

}