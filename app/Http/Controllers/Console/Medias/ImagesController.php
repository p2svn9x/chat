<?php

namespace App\Http\Controllers\Console\Medias;

use App\Http\Controllers\Console\ConsoleController;
use Illuminate\Http\Request;
class ImagesController extends ConsoleController
{

    public function show($id = 0)
    {
        $folders = new FoldersController();
        $nameFolder = $folders->findChildentFolder($id);
        $folder = $folders->findFolder($id);

        $data['childentFolders'] = $folders->show($id);
        $data['folder'] = $folder;
        $data['images'] = $this->images($nameFolder);
        $this->responData($data);
    }

    public function images($nameFolder)
    {
        $files = glob(public_path() .$nameFolder.'/*.*');

        $list = array();
        foreach($files as $path) {
            $explodeUrl = explode("public",$path);
            if (isset($explodeUrl[1])) {
                $list[] = $explodeUrl[1];
            }
        }
       return $list;
    }

    public function doUpload(Request $request, $folder = 0)
    {

        $mimes = array('image/jpeg', 'image/png', 'image/gif', 'image/jpg', 'image/*');
        $file = $request->images;

        if(empty($file)) {
            $this->respondError("Bạn chưa chọn ảnh");
        }

        if (!in_array($file->getMimeType(), $mimes)) {
            return $this->respondError("Định dạng ảnh không đúng");
        }
        list($width, $height) = getimagesize($file);

        if ($width < 460 || $height < 460) {
            return $this->respondError("Khích thước tối thiều là 460px x 460px");
        }

        $folders = new FoldersController();
        $nameFolder = $folders->findChildentFolder($folder);
       
        try {
            $file->move(public_path($nameFolder),$file->getClientOriginalName());
            $this->responData($nameFolder."/".$file->getClientOriginalName());
        }
        catch (\Exception $e) {
           $this->respondError("Có lỗi xảy ra");
        }


    }
}