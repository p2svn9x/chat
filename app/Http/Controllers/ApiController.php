<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;
use App\Models\User;
class ApiController extends AppController
{
    protected $user;
    public function __construct()
    {
//        $this->middleware(function ($request, $next) {
//            $this->user = Auth::user();
//            return $next($request);
//        });
    }

    public function checkLogin()
    {
        $token = $this->requestReaders('token');
        if (empty($token)) {
            $this->respondAuthorized();
        }
        $this->getUser($token);

    }

    public function respondJson($tatus = 200, $message = '', $data = array())
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

    public function respondLogin($data = null, $starus = 200, $message = "")
    {
        $result = array(
            "status" => $starus,
            "message" => $message,
            "data" => $data,
        );
        echo json_encode($result);
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

    public function getUser($token)
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $t = time();
        $user = User::where('token', $token)->get()->first();

        if (empty($user)) {
            $this->respondAuthorized();
        }

        $timeExpired = strtotime($user->last_login) + (30 * 24 * 60 * 60);
        if ($t > $timeExpired ) {
            $this->respondAuthorized('Your session has expired. Please login again.');
        }

        if ($user->block == 1) {
            $this->respondAuthorized('Your account is locked in contact for more details');
        }

        $this->user = $user;
        return true;

    }

}