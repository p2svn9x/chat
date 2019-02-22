<?php

namespace App\Http\Controllers\Console\Images;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Console\Folders;
class FofdersController extends ConsoleController
{

    public function show($prent = 0)
    {
        echo preg_replace('/\s+/', '', $this->utf8tourl("LậpTrình Php"));
        exit;
        $list = Folders::where('parent', $prent)->orderBy('name')->get(['id', 'name'])->toArray();
    }

    public function add()
    {
        $parent = $this->post('parent');
        $name = $this->post('name');
        if (empty($name)) {
            $this->respondError("Tên thư mục không được bỏ trống");
        }
        $folder = new Folders();
        $folder->user_id = $this->user->id;
        $folder->parent = $parent;
        $folder->name = $name;
        $this->created($name);
        if ($folder->save()) {
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

    public function created($folder)
    {
        $dirname = public_path()."/images/".$folder;
        if (!file_exists($dirname)) {
            mkdir( $dirname, 7777);
            return true;
        }
        return false;
    }
}
