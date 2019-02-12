<?php

namespace App\Http\Controllers\Api\Console;

use App\Exceptions\Generate;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use App\Models\Category;

class CategorysController extends ApiController
{
    public function __construct()
    {
        parent::__construct();
    }


}