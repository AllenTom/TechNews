<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 12:37 PM
 */

namespace app\register\controller;

use app\common\model\Profile;
use app\common\model\User;
use think\Config;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch("index");
    }

    public function save()
    {
        $password = md5($this->request->post('password') . Config::get("salt"));
        $user = User::create([
            "username" => $this->request->post('username'),
            "password" => $password,
        ]);
        $profile = new Profile();
        Profile::create([
            "user" => $user->id,
            "nickname" => $user->username,
            "avatar" => '/imgs/avatar/user_default.png'
        ]);

        $this->redirect('/login');
    }
}
