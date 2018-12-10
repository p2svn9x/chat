<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function index()
    {
        $name = "haha";
        $data['name'] = 'Name 1';
        for ($i = 0; $i < 10; $i++) {
            $data['stt'][] = $i;
        }
       return View('index', $data);
    }

    public function home()
    {
        $name = "haha";
        $data['name'] = 'Name 1';
        for ($i = 0; $i < 10; $i++) {
            $data['stt'][] = "Name ".$i;
        }
        return View('demo', $data);
    }
}
