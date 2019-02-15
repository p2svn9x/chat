<?php
namespace App\Exceptions;

use App\Http\Controllers\AppController;
class PaginationController extends AppController
{
    public function pagination($limit = 20, $offset = 0)
    {

        if (empty($limit)) {
            $limit = 10;
        }

        $pageCurrent = $offset;
        if (empty($offset) || $offset == 0) {
            $pageCurrent = 1;
            $offset = 0;
        }

        if ($offset > 0 ) {

            $offset = ($offset - 1) * $limit;
        }

        return [
            'limit' => $limit,
            'offset' => $offset,
            'pageCurrent' => $pageCurrent
        ];
    }

    public function getPagination()
    {
        $page = $this->get('page');
        if (empty($page)) {
            $page = $this->post('page');
        }
        if (empty($page) || $page == 1) {
            $page = 0;
        }

        $size = $this->get('size');
        if (empty($page)) {
            $size = $this->get('size');
        }

        return $this->pagination($size, $page);
    }

    public function totalPage($total, $page)
    {
        if (empty($total)) {
            return 0;
        }
        return ceil($total / $page);
    }
}
