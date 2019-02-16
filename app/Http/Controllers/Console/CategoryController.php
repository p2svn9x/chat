<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Category;
use phpDocumentor\Reflection\Types\Array_;

class CategoryController extends ConsoleController
{
    public $listParent = [];
    public function index()
    {
        $data['categorys'] = $this->listParent(1);
        $data['list'] = $this->listCategory(1);

        return $this->viewConsole('category/list', $data);
    }

    public function listCategory($type)
    {
        $data = Category::orderBy('sort')->get(['id', 'name', 'status', 'parent', 'sort'])->toArray();

        if (empty($data)) {
            return array();
        }

        $list = array();
        foreach ($data AS $value) {

            if (empty($value['parent'])) {
                $value['parentName'] = '';
                $list[] = $value;
                continue;
            }

            $value['parentName'] = $this->nameParent($value['parent']);
            $list[] = $value;
        }
        return $list;
    }

    public function nameParent($id, $name = '')
    {
        $category = Category::find($id);
        if(empty($category)) {
            return $name;
        }
        $nameParent = $category->name;
        if (!empty($name)) {
            $nameParent = $category->name.' <i class="fa fa-long-arrow-right"></i> '.$name;
        }

        if (empty($category->parent)) {
            return $nameParent;
        }

        return $this->nameParent($category->parent, $nameParent);
    }

    public function listParent($type)
    {
        $result = Category::where([['type', $type]])->orderBy('sort')->get(['id', 'name', 'parent', 'sort'])->toArray();

        if (empty($result)) {
            return array();
        }

        return $this->sortCategory($result);
    }

    public function children($id, $type)
    {
        return Category::where([['type', $type],['parent', $id]])->orderBy('sort')->get(['id', 'name', 'parent', 'sort'])->toArray();
    }

    public function save($id = null)
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

        if (empty($parent) && empty($customIcon)) {
            $textError[] = 'Icon';
        }

        if ($typeCa == 2 && empty($customLink)) {
            $textError[] = 'Link';

        }

        if (!empty($textError)) {
            $this->respondError( implode(", ",$textError));
        }

        if ($typeCa == 2 && !empty($customLink) && !filter_var($customLink, FILTER_VALIDATE_URL)) {
            $textError[] = 'Link không được bỏ trống';
            $this->respondError("Link không đúng định dạng");

        }

        if (!empty($id)) {
            $category = Category::find($id);
            if (empty($category)) {
                $this->respondError("Category không tồn tại");
            }

        } else {
            $category = new Category();
            $category->status = 1;
            $category->sort = 100;
        }

        $category->user_id = $this->user->id;
        $category->parent = $parent;
        $category->type = $typeCa;
        $category->name = $nameCa;
        $category->icon = html_entity_decode($customIcon);
        $category->link = $customLink;

        if ($category->save()) {
            $this->respondStatus('Lưu thành công');
        }

        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

    public function edit($id = null)
    {
        if (empty($id)) {
            $this->respondError("Danh mục không tồn tại");
        }
        $category = Category::find($id);
        if (empty($category)) {
            $this->respondError("Danh mục không tồn tại");
        }
        $this->responData($category);
    }

    public function status($id = null, $status = null)
    {
        if (empty($id)) {
            $this->respondError("Danh mục không tồn tại");
        }
        if (empty($status)) {
            $status = 0;
        }
        $user = Category::find($id);
        if (empty($user)) {
            $this->respondError("Danh mục không tồn tại");
        }
        $user->status = $status;
        if ($user->save()) {
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

    public function sort($id = null, $sort = null)
    {
        if (empty($id)) {
            $this->respondError("Danh mục không tồn tại");
        }
        if (empty($sort)) {
            $sort = 1;
        }
        $user = Category::find($id);
        if (empty($user)) {
            $this->respondError("Danh mục không tồn tại");
        }
        $user->sort = $sort;
        if ($user->save()) {
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

    public function allCategory()
    {
        $result =  Category::where([['type', 1]])->get(['id', 'name', 'parent', 'sort']);
        return $this->sortCategory($result);
    }

    public function sortCategory($data, $patent = 0, $text = '')
    {
        foreach ($data AS $key => $value) {
            if ($value['parent'] != $patent) {
                continue;
            }

            $this->listParent[] = array(
                'name' => $text.$value['name'],
                'id' => $value['id'],
            );
            unset($data[$key]);
            $this->sortCategory($data, $value['id'], $text."&#151");
        }
        return $this->listParent;
    }

}