<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Articel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class IndexController extends ApiController
{
    public function show()
    {

        return $this->loadView('test');
        //$this->responData($this->user);
    }

    public function listTest()
    {
        $data = Articel::select('article.id', 'article.name', 'article.img', 'article.status', 'article.sort', 'article.menu_id')
            ->with('category:id,name')
            ->get();
        $this->responData($data);

    }

    public function passTest()
    {
        echo Hash::make(123456);
        exit;
    }

    public function verifyPasswordLogin()
    {
        $pass = Hash::make(123456);
        //$pass = '$2y$10$JxIildYveASoyROD9zUGjedAhRhVPmpuSTBlqqMh02F48OFIdV74m';
        if (Hash::check(1234561, $pass)) {
            echo "vao";
        } else {
            echo "khong";
        }
    }


    public function add()
    {
        $user = new User();
        $user->username = 'langtuhoabinh';
        $user->password = Hash::make(123456);
        $user->email = 'langtuhoabinh2010@gmail.com';
        $user->phone = '0353300993';
        $user->save();

    }

}