<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 12:37 PM
 */

namespace app\login\controller;

use app\common\controller\ApplicationController;
use app\common\model\Auth;
use app\common\model\User;
use think\Config;
use think\Controller;
use think\Cookie;
use think\Debug;
use think\exception\DbException;
use think\Request;

class Index extends ApplicationController
{
    public function auth()
    {
        $username = $this->request->post('username');
        $password = $this->request->post('password');
        try {
            $user = User::get([
                "username" => $username,
                "password" => md5($password . Config::get('salt'))
            ]);
        } catch (DbException $e) {
            $this->error("数据库错误");
        }
        if ($user == null) {
            $this->error("密码错误");
        }

        $key = Config::get("salt");
        $token = md5($username . $key);
        Cookie::set("token", $token);
        Auth::create([
            "token_key" => $token,
            "user" => $user->id
        ]);
        return $this->redirect("/admin");
    }

    public function logout()
    {
        Cookie::delete("token");
        $this->redirect("/login");
    }

}
