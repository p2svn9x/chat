<?php
namespace App\Exceptions;


class Generate
{
    public function token($length = 64)
    {
        return bin2hex(random_bytes($length));
    }
}