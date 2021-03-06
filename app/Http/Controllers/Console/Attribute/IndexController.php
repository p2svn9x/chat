<?php

namespace App\Http\Controllers\Console\Attribute;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Console\ConsoleController;
use App\Http\Controllers\Console\CategoryController;
use App\Exceptions\PaginationController;
use App\Models\Attribute;
class IndexController extends ConsoleController
{

    public function index($id = null, $page = 0, $limit = 10)
    {
        $cas = new CategoryController();
        $paginations = new PaginationController();
        $pagination = $paginations->pagination($limit, $page);
        $data['categorys'] = $cas->allCategory();
        $pagination['count'] = $paginations->totalPage($this->countAttributes($id), $pagination['limit']);
        $data['pagination'] = $pagination;
        $data['attributes'] = $this->attributes($id, $pagination['offset'], $pagination['limit']);
        if (empty($id)) {
            $id = 0;
        }
        $data['findCategory'] = $id;
        return $this->viewConsole('attribute/list', $data);
    }



    public function add($id = null)
    {
        $cas = new CategoryController();
        $data['categorys'] = $cas->allCategory();
        $data['id'] = $id;
        return $this->viewConsole('attribute/add', $data);
    }

    public function save($id = null)
    {
        $category = $this->post('category');
        $typeAttribute = $this->post('typeAttribute');
        $textlabel = $this->post('textlabel');

        $textError = array();
        if(empty($category)) {
            $textError[] = 'Danh mục';
        }

        if(empty($typeAttribute)) {
            $textError[] = '"Khiểu thuộc tính';
        }

        if(empty($textlabel)) {
            $textError[] = 'Tên thuộc tính';
        }

        if (!empty($textError)) {
            $this->respondError( implode(", ",$textError). " không được bỏ trống");
        }

        if (!empty($id)) {
            $attribute = Attribute::find($id);
            if (empty($attribute)) {
                $this->respondError("Thuộc tính không tồn tại");
            }

        } else {
            $attribute = new Attribute();
        }

        $attribute->user_id = $this->user->id;
        $attribute->category_id = $category;
        $attribute->title = $textlabel;
        $attribute->type = $typeAttribute;
        if ($attribute->save()) {
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

    public function show($id = null)
    {
        if (empty($id)) {
            $this->respondError("Thuộc tính không tồn tại");
        }

        $result = Attribute::find($id);
        if (empty($result)) {
            $this->respondError("Thuộc tính không tồn tại");
        }
        $this->responData($result);
    }

    public function attributes($id, $page, $limit)
    {
        $query = Attribute::query();
        if (!empty($id)) {
            $query->where('category_id', '=', $id);
        }
        $results = $query->with('categorys:id,name')
            ->orderBy('category_id')
            ->orderBy('sort')
            ->limit($limit)
            ->offset($page)
            ->get(['id','category_id','status','sort'])
            ->toArray();
        if (empty($results)) {
            return array();
        }
        //$this->responData($results);
        $data = array();
        $cas = new CategoryController();
        foreach ($results AS $result) {
            $result['categorys']['parent'] = $cas->nameParent($result['category_id']);
            $data[] = $result;
        }
        //$this->responData($data);
        return $data;
    }

    public function countAttributes($id)
    {
        $query = Attribute::query();
        if (!empty($id)) {
            $query->where('category_id', '=', $id);
        }

        $data = $query->count();
        return $data;
    }

    public function status($id = null, $status = null)
    {
        if (empty($id)) {
            $this->respondError("Thuộc tính không tồn tại");
        }
        if (empty($status)) {
            $status = 0;
        }
        $user = Attribute::find($id);
        if (empty($user)) {
            $this->respondError("Thuộc tính không tồn tại");
        }
        $user->status = $status;
        if ($user->save()) {
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

    public function delete($id = null)
    {
        if (empty($id)) {
            $this->respondError('Thuộc tính cannot be blank.');
        }

        $attribute = Attribute::find($id);
        if (empty($attribute)) {
            $this->respondError("Thuộc tính does not exist");
        }
        if ($attribute->delete()) {
            $this->respondStatus('Xóa thành công');
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
        $user = Attribute::find($id);
        if (empty($user)) {
            $this->respondError("Danh mục không tồn tại");
        }
        $user->sort = $sort;
        if ($user->save()) {
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

}
