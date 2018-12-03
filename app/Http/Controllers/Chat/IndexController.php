<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Exceptions\Pusher;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

class IndexController extends ApiController
{
    public function show()
    {
        $options = array(
            'cluster' => 'ap1'
        );
        $pusher = new Pusher(
            '298c1a84fb2ff0bee573',
            '66aaec78847429efcba4',
            '659508',
            $options
        );
        $data['name'] = 'test';
        $data['message'] = 'haha';
        $pusher->trigger('test', 'notice', $data);
    }

    public function chat()
    {
        return $this->loadView('chat');
    }
}