<?php
namespace App\Exceptions;

use Illuminate\Support\Facades\Route;
class PathAuth
{
    public function checkPath()
    {
        $currentPath = Route::getFacadeRoot()->current()->uri();
        $listPath = $this->listPath();
        if (in_array($currentPath, $listPath)) {
            return true;
        }
        return false;

    }

    public function listPath()
    {
        return array(
            'api/login'
        );
    }
}