<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\Mails\KeronRepository;
use Mail;
use Exception;

class KeronController extends Controller
{
    //
    private $repo;
    public function __construct()
    {
        $this->repo = new KeronRepository;
    }


    public function send_email_quote()
    {
        $post_data = request()->all();
        $flag = $this->repo->send_email_quote($post_data);
        if(count($flag) >= 1)
        {
            $flag = $this->repo->send_email_quote($post_data);
            if(count($flag) >= 1)
            {
                $flag = $this->repo->send_email_quote($post_data);
                if(count($flag) >= 1) return response_fail();
            }
        }

        return response_success([],"发送成功");
    }




}
