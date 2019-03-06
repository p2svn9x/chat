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
    public $access_token = 'EAAZAFiid2nrEBAES4ZAlRV8AEquAMX442THieZBMaZBYo4NgZBdaPcIz0hxfPDn7DwLZCnbH4ZCveZBmdQ82ZBrdsItDVZADLt6zZCSaJEsIHpjdkFTq8HhDEf4L8J3OAFJfAXF8Gy2bzngEE0mk2rcGsFZArDoRQesZBo68HNoYOxcnKhknO9oOe0vl5';
    public $postID = '791034614584351_2606898956018948';
    public function index()
    {
        $facebook_data_temp['paging']['next'] = null;

        $facebook_data_temp = $this->getDataFromGraphApi(
            $this->postID . '/comments',
            array(
                'access_token' => $this->access_token,
                'fields' => 'from,can_reply_privately,created_time,message',
                'pretty' => 0,
                'limit' => 100
            ),
            $facebook_data_temp['paging']['next']
        );
        $this->printData($facebook_data_temp);

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


    private function getDataFromGraphApi($str_uri, $params = array(), $url = null) {
        if( empty($params['access_token']) ) {
            return null;
        }
        //CakeLog::error('test url '.$str_uri);
        $params['pretty'] = 0;
        if( empty($params['limit']) ) {
            $params['limit'] = 100;
        }

        // sinh link nếu chưa có
        if( empty($url) ) {
            $url = 'https://graph.facebook.com/v2.10/'. $str_uri;
        }


       $url_setting = $url;
        $ch_setting = curl_init($url_setting);
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch_setting, CURLOPT_POST, 1);
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch_setting, CURLOPT_POSTFIELDS, json_encode(
            $params
        ));
        //Set the content type to application/json
        curl_setopt($ch_setting, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        //curl_setopt($ch_setting, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        //Execute the request
        $result = curl_exec($ch_setting);
        $input = json_decode($result, true);
        $this->printData($input);
    }
}