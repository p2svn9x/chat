<?php

namespace App\Http\Controllers\Console\Medias;

use App\Http\Controllers\Console\ConsoleController;
use Illuminate\Http\Request;
class ImagesController extends ConsoleController
{

    public function show($id = 0)
    {
        $folders = new FoldersController();
        $nameFolder = $folders->findFolder($id);

        $data['folders'] = $folders->show($id);
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
        $folders = new FoldersController();
        $nameFolder = $folders->findFolder($folder);

        $file = $request->filesTest;
        try {
            $file->move(public_path($nameFolder."/dsadsa"),$file->getClientOriginalName());
            $this->respondStatus($nameFolder."/".$file->getClientOriginalName());
        }
        catch (\Exception $e) {
           $this->respondError("Có lỗi xảy ra");
        }


    }
}