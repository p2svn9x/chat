<?php

namespace App\Http\Controllers\Console;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Exceptions\PaginationController;
use App\Models\Pageuser;
use App\Models\Newuser;
class NewusersController extends ConsoleController
{
    public function showView ()
    {

        return $this->viewConsole('attribute/user');
    }

    public function callApi()
    {
        $page = $this->getPage();
        $url = 'https://admin.smobgame.com/plf/Shurikates/datats?query=SELECT users.id, users.username, users.email, users.email_verified, users.phone, users.phone_verified, users.facebook_uid, users.vip, users.vip_en FROM users ORDER BY users.id LIMIT '.$page['offset'].', 1000&model=User';
        //$url = 'https://admin.smobgame.com/plf/Shurikates/datats?query=SELECT    users.id,   users.username,   users.email,   users.email_verified,   users.phone,   users.phone_verified,   users.facebook_uid,   users.vip,   users.vip_en,   profiles.fullname,   profiles.peopleId,   profiles.peopleId_date_get,   profiles.peopleId_place_get  FROM   users    LEFT JOIN `profiles`      ON `profiles`.`user_id` = `users`.id  WHERE users.id = 12920851&model=User';
        $url = str_replace(' ', '%20', $url);
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_USERAGENT, 'Your application name');
        curl_setopt($curl_handle, CURLOPT_TIMEOUT, 100);
        $response = curl_exec($curl_handle);
        if ($response === FALSE) { /* Handle error */
            $this->respondError('Server error!');
        }

        $datas = json_decode($response, true);

        if (empty($datas)) {
            $this->respondError("het data ".$page['offset']);
        }

        $this->save($datas);
       // $this->printData($datas);
    }

    public function getPageCurrent()
    {
        return Pageuser::first();
    }

    public function updatePage()
    {
        $page = Pageuser::first();
        $page->page_current = $page->page_current + 1;
        $page->save();
    }

    public function getPage()
    {
        $page = $this->getPageCurrent();
        $paginations = new PaginationController();
        $pagination = $paginations->pagination(1000, $page->page_current);
        $pagination['count'] = $paginations->totalPage($page->total_page, 1000);
        //$this->printData($pagination);
        if ($pagination['pageCurrent'] >= $pagination['count']) {
            $this->respondError('Da chay song');
        }
        return $pagination;
    }
    public function save($datas)
    {
        $rows = array();
        foreach ($datas AS $data) {
            $vipVn = $vipEn = 'Default';
            $dataUser = $data['users'];
           // $dataProfiles = $data['profiles'];

            if (!empty($dataUser['vip'])) {
                $vipVn = $dataUser['vip'];
            }

            if (!empty($dataUser['vip_en'])) {
                $vipEn = $dataUser['vip_en'];
            }

            $rows[] = array(
                'user_id' => $dataUser['id'],
                'username' => $dataUser['username'],
                'email' => $dataUser['email'],
                'email_verified' => $dataUser['email_verified'],
                'phone' => $dataUser['phone'],
                'phone_verified' => $dataUser['phone_verified'],
                'facebook_uid' => $dataUser['facebook_uid'],
                'vip_vn' => $vipVn,
                'vip_en' => $vipEn,
//                'fullname' => $dataProfiles['fullname'],
//                'peopleId' => $dataProfiles['peopleId'],
//                'peopleId_date_get' => $dataProfiles['peopleId_date_get'],
//                'peopleId_place_get' => $dataProfiles['peopleId_place_get']
            );
        }
        //$this->printData($rows);
        if (Newuser::insert($rows)) {
            $this->updatePage();
            $this->respondStatus('Lưu thành công');
        }
        $this->respondError('Đã xẩy ra lỗi vui lòng thử lại sau');
    }



}
