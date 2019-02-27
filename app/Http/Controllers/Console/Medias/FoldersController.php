<?php

namespace App\Http\Controllers\Console\Medias;

use App\Http\Controllers\Console\ConsoleController;
use App\Models\Console\Folders;
class FoldersController extends ConsoleController
{

    public function show($prent = 0)
    {
        $result = Folders::where('parent', $prent)->orderBy('name')->get(['id', 'name_folder']);
        return $result;
    }

    public function add()
    {
        $parent = $this->post('parent');
        $name = $this->post('name');
        if (empty($name)) {
            $this->respondError("Tên thư mục không được bỏ trống");
        }

        if (empty($parent)) {
            $parent = 0;
        }
        $demo = $this->getNameParent($parent,'');
        $nameFolder = strtolower(preg_replace('/\s+/', '', $this->utf8tourl($name)));
        $folder = new Folders();
        $folder->user_id = $this->user->id;
        $folder->parent = $parent;
        $folder->name = $nameFolder;
        $folder->name_folder = $name;
        $checkFolder = $this->created($demo."/".$nameFolder);
        if (empty($checkFolder)) {
            $this->respondStatus('Thư mục đã tồn tại');
        }

        if ($folder->save()) {
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }

    public function findFolder($id)
    {
        $perent = "/images";
        if(empty($id)) {
            return $perent;
        }
        $result = Folders::where('id', $id)->get(['id', 'name', 'parent'])->first();

        if (empty($result)) {
            return $perent;
        }

        if (!empty($result->parent)) {
            $perent = "/images/";
        }

        $data = $perent.$this->getNameParent($result->parent, '')."/".$result->name;
        return $data;
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

    public function getNameParent($id, $name = '')
    {
        if(empty($id)) {
            return $name;
        }

        $folder = Folders::find($id);
        if(empty($folder)) {
            return $name;
        }

        $nameParent = $folder->name;

        if (!empty($name)) {
            $nameParent = $folder->name.'/'.$name;
        }

        if (empty($folder->parent)) {
            return $nameParent;
        }
        return $this->nameParent($folder->parent, $nameParent);
    }
}
