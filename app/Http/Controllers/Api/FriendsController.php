<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\Generate;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Api\Friend;

class FriendsController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
        $this->checkLogin();
    }

    public function index()
    {

        $data = Friend::select('friends.id', 'friends.author', 'friends.subscribe', 'friends.lass_time', 'friends.notification',
            'friends.status', 'friends.block', 'friends.type', 'friends.user_id')
            ->with('user:id,username,avatar,status')
            ->where('user_id', $this->user->id)
            ->orWhere('author', $this->user->id)
            ->where('status', 1)
            ->get();
        $this->responData($data);
    }
}