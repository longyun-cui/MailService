<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Mails\TableRepository;
use Mail;
use Exception;

class TableController extends Controller
{
    //
    private $repo;
    public function __construct()
    {
        $this->repo = new TableRepository;
    }

    public function test()
    {
        $post_data['user_id'] = 1;
        $post_data['code'] = 1;
        $post_data['target'] = 'longyun-cui@163.com';
        dd($post_data);

//        $flag = $this->repo->send_email_activation($post_data);
//        dd($flag);
    }

    public function send_email_activation()
    {
        $post_data = request()->all();
        $flag = $this->repo->send_email_activation($post_data);
        if(count($flag) >= 1)
        {
            $flag = $this->repo->send_email_activation($post_data);
            if(count($flag) >= 1)
            {
                $flag = $this->repo->send_email_activation($post_data);
                if(count($flag) >= 1) return response_fail();
            }
        }

        return response_success([],"发送成功");
    }




}
