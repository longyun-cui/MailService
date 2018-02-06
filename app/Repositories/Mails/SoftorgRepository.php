<?php
namespace App\Repositories\Mails;

use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

use Response, Auth, Validator, DB, Excepiton, Config;

class SoftorgRepository {

    private $host;
    private $port;
    private $username;
    private $password;

    public function __construct()
    {
        $this->host = env('SOFTORG_MAIL_HOST');
        $this->port = env('SOFTORG_MAIL_PORT');
        $this->username = env('SOFTORG_MAIL_USERNAME');
        $this->password = env('SOFTORG_MAIL_PASSWORD');
    }

    // 发送管理员激活邮件
    public function send_admin_activation($post_data)
    {
//        Mail::to('longyun-cui@163.com')->send(new OrderShipped());
        Config::set('mail.host',$this->host);
        Config::set('mail.port',$this->port);
        Config::set('mail.username',$this->username);
        Config::set('mail.password',$this->password);

        $variate['host'] = $post_data['host'];
        $variate['admin_id'] = $post_data['admin_id'];
        $variate['code'] = $post_data['code'];

        // 第一个参数填写模板的路径，第二个参数填写传到模板的变量
        Mail::send('email.softorg.admin.activation', $variate, function ($message) use ($post_data) {

            $message->from('admin@softorg.cn', 'Softorg管理员'); // 发件人（你自己的邮箱和名称）
            $message->to($post_data['target']); // 收件人的邮箱地址
            $message->subject('管理员邮箱激活'); // 邮件主题
        });

        return Mail::failures();
    }

    // 发送报名活动的确认邮件
    public function send_activity_apply_activation($post_data)
    {
//        Mail::to('longyun-cui@163.com')->send(new OrderShipped());
        Config::set('mail.host',$this->host);
        Config::set('mail.port',$this->port);
        Config::set('mail.username',$this->username);
        Config::set('mail.password',$this->password);

        $variate['host'] = $post_data['host'];
        $variate['email'] = $post_data['email'];
        $variate['activity_id'] = $post_data['activity_id'];
        $variate['apply_id'] = $post_data['apply_id'];
        $variate['title'] = $post_data['title'];
        $variate['is_sign'] = $post_data['is_sign'];
        $variate['password'] = isset($post_data['password']) ? $post_data['password'] : '';

        // 第一个参数填写模板的路径，第二个参数填写传到模板的变量
        Mail::send('email.softorg.apply.activation', $variate, function ($message) use ($post_data) {

            $message->from('admin@softorg.cn', 'Softorg管理员'); // 发件人（你自己的邮箱和名称）
            $message->to($post_data['target']); // 收件人的邮箱地址
            $message->subject('报名确认'); // 邮件主题
        });

        return Mail::failures();
    }


}