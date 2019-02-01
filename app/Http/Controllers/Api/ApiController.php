<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;
use App\Models\User;
use App\Http\Controllers\AppController;
class ApiController extends AppController
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            if (empty($this->user)) {

               return $this->respondAuthorized();
            }
            return $next($request);
        });
    }

    public function checkLogin()
    {
        $token = $this->requestReaders('token');
        if (empty($token)) {
            $this->respondAuthorized();
        }
        $this->getUser($token);

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
        return $this->respondJson($message, $code, $status, $data);
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