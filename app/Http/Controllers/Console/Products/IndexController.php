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
        $arr_setting = array(
            'get_started' =>  array(
                'payload' => 'GET_STARTED_PAYLOAD'
            )
        );
        $access_token = 'EAAZAFiid2nrEBAES4ZAlRV8AEquAMX442THieZBMaZBYo4NgZBdaPcIz0hxfPDn7DwLZCnbH4ZCveZBmdQ82ZBrdsItDVZADLt6zZCSaJEsIHpjdkFTq8HhDEf4L8J3OAFJfAXF8Gy2bzngEE0mk2rcGsFZArDoRQesZBo68HNoYOxcnKhknO9oOe0vl5';
        $url_setting = 'https://graph.facebook.com/v2.8/me/messenger_profile?access_token='.$access_token;
        $ch_setting = curl_init($url_setting);
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch_setting, CURLOPT_POST, 1);

        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch_setting, CURLOPT_POSTFIELDS, json_encode(
            $arr_setting
        ));

        //Set the content type to application/json
        curl_setopt($ch_setting, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        //curl_setopt($ch_setting, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        //Execute the request
        $result = curl_exec($ch_setting);

        $input = json_decode($result, true);
        $this->printData($input);
    }
    public function index1()
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