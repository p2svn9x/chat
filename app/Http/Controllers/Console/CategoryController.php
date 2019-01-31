<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
class CategoryController extends ConsoleController
{

    public function index()
    {
        $data['categorys'] = $this->listParent(0);
        $data['list'] = $this->listCategory(0);
       // $this->printData($data);
        return $this->viewConsole('category/list', $data);
    }

    public function listCategory($type)
    {
        return Category::where([['type', $type]])->orderBy('sort')->get(['id', 'name', 'status', 'parent', 'sort'])->toArray();
    }

    public function listParent($type)
    {
        return Category::where([['type', $type],['parent', 0]])->orderBy('sort')->get(['id', 'name', 'status', 'parent', 'sort'])->toArray();
    }
}