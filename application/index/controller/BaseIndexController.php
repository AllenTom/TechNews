<?php
/**
 * Created by IntelliJ IDEA.
 * User: TakayamaAren
 * Date: 12/4/2017
 * Time: 9:38 PM
 */

namespace app\index\controller;


use app\common\model\Auth;
use app\common\model\User;
use think\Controller;
use think\Cookie;

class BaseIndexController extends Controller
{
    protected $headerNavIndex = "Home";
    protected $user = null;

    protected function _initialize()
    {
        parent::_initialize();
        $this->assign("headerNavIndex", $this->headerNavIndex);

        $tokenKey = Cookie::get('token');
        if ($tokenKey != null) {
            $token = Auth::get(['token_key' => $tokenKey]);
            if ($token != null) {
                $this->user = User::get($token->user);
            }

        }
        $this->assign("user", $this->user);
    }

}
