<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Array_;
use App\Models\User;
use App\Exceptions\PathAuth;
use App\Http\Controllers\AppController;
class ApiController extends AppController
{
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            $pathAuth = new PathAuth();
            $checkPath = $pathAuth->checkPath();
            if (empty($this->user) && empty($checkPath)) {
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