<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ApiController extends AppController
{

    public function respondJson($data = array())
    {
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }

    protected function respondAuthorized($message = 'You do not have access', $status = 401, $data = null)
    {
        return $this->respondJson(array('status' => $status, 'message' => $message, "data" => $data));
    }

    protected function responData($data = null, $message = 'Success', $status = 200)
    {
        if (empty($data)) {
            $data = null;
        }
        return $this->respondJson(array('status' => $status, 'message' => $message, "data" => $data));
    }

    protected function respondStatus($message = 'Success', $status = 200, $data = null)
    {
        return $this->respondJson(array('status' => $status, 'message' => $message, "data" => $data));
    }

    protected function respondError($message = 'Your session has expired. Please login again.', $status = 400, $data = null)
    {
        return $this->respondJson(array('status' => $status, 'message' => $message, "data" => $data));
    }

    public function respondData($data = null, $starus = 200, $message = "")
    {
        $resutl = array(
            "status" => $starus,
            "message" => $message,
            "data" => $data,
        );
        $this->respondJson($resutl);
    }

    public function printData($data = array())
    {
        echo "<pre>";
            print_r($data);
        echo "</pre>";
    }
}