<?php

namespace App\Http\Controllers\Console\Products;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Console\ConsoleController;
use App\Http\Controllers\Console\CategoryController;
use App\Exceptions\PaginationController;
use App\Models\Attribute;
use App\Models\Category;
class IndexController extends ConsoleController
{

    public function index()
    {

        $dir = public_path()."/images/";

        $a = scandir($dir);

       // $b = scandir($dir,1);

        $this->printData($a);


//        $files = glob(public_path() . '/images/giay/*.*');
//
//        foreach($files as $path) {
//            echo $path."<br/>";
//        }
//        return $this->viewConsole('products/list');
    }

    public function add()
    {
        $cas = new CategoryController();
        $data['categorys'] = $cas->allCategory();
        $data['title'] = 'Thêm sản phẩm';
        $data['breadcrumb'] = 'Sảm phẩm / Thêm mới';
        return $this->viewConsole('products/add', $data);
    }
}