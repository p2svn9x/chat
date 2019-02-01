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

    public function save($id)
    {
        $parent = $this->post('parentCa');
        $typeCa = $this->post('typeCa');
        $nameCa = $this->post('nameCa');
        $customIcon = $this->post('customIcon');
        $customLink = $this->post('customLink');
        $textError = array();

        if(empty($nameCa)) {
            $textError[] = 'Tên danh mục';
        }

        if (empty($parant) && empty($customIcon)) {
            $textError[] = 'Icon';
        }

        if (!empty($textError)) {
            $this->respondError( implode(", ",$textError));
        }

    }
}