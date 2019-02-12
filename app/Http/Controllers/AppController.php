<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;
use Illuminate\Support\Facades\Auth;
use App\User;
class AppController extends Controller
{

    public function post($key = null, $default = null)
    {
        return array_get($_POST, $key, $default);
    }

    public function get($key = null, $default = null)
    {
        return array_get($_GET, $key, $default);
    }

    public function segment($param)
    {
        $s = $_SERVER;
        $segment = explode('/', $s['REQUEST_URI']);
        if (empty($segment[$param])) {
            return false;
        }
        return $segment[$param];
    }

    public function pagination($limit = 20, $offset = 0)
    {
        if (empty($limit)) {
            $limit = 10;
        }

        $pageCurrent = $offset;
        if (empty($offset) || $offset == 0) {
            $pageCurrent = 1;
            $offset = 0;
        }

        if ($offset > 0 ) {
            $offset = ($offset - 1) * $limit;
        }

        return array(
            'limit' => $limit,
            'offset' => $offset,
            'pageCurrent' => $pageCurrent
        );
    }

    public function getPagination()
    {
        $page = $this->Get('page');
        if (empty($page)) {
            $page = $this->Post('page');
        }
        if (empty($page) || $page == 1) {
            $page = 0;
        }

        $size = $this->Get('size');
        if (empty($page)) {
            $size = $this->Post('size');
        }

        return $this->pagination($size, $page);
    }

    public function totalPage($total, $page)
    {
        if (empty($total)) {
            return 0;
        }
        return ceil($total / $page);
    }

    public function loadView($view = 'index', $data =  Array())
    {
        return View($view, $data);
    }

    public function printData($data = array())
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        exit;
    }

    public function requestReaders ($key = '')
    {
        $headers = apache_request_headers();
        if(empty($key) || !isset($headers[$key])) {
            return '';
        }
        return $headers[$key];
    }

    public function respondJson($message = '', $code = 0, $status = 200,$data = array())
    {
        if (empty($data)) {
            $data = null;
        }

        $responseData = array(
            'status' => $status,
            'message' => $message,
            'code' => $code,
            'data' => $data
        );
        http_response_code ($status);
        echo json_encode($responseData);
        exit;
        //return response($responseData, (int)$status);
    }

    protected function respondAuthorized($message = 'You do not have access', $status = 401, $code = 1, $data = null)
    {

        return $this->respondJson(url()->current(), $code, $status, $data);
    }

    protected function responData($data = null, $code = 0, $message = 'Success', $status = 200)
    {
        return $this->respondJson($message, $code, $status, $data);
    }

    protected function respondStatus($message = 'Success', $status = 200, $code = 0, $data = null)
    {
        return $this->respondJson($message, $code, $status, $data);
    }

    protected function respondError($message = 'Your session has expired. Please login again.', $status = 400, $code = 1, $data = null)
    {
        return $this->respondJson($message, $code, $status, $data);
    }

    public function respondData($data = null, $starus = 200, $message = "")
    {

        $this->respondJson($data);
    }

}