<?php

namespace App\Http\Controllers\Console\Medias;

use App\Http\Controllers\Console\ConsoleController;
use App\Http\Controllers\Console\Medias\FoldersController;
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
}