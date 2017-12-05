<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 12:24 PM
 */

namespace app\admin\controller;


use app\common\controller\ApplicationController;
use app\common\model\Auth;
use app\common\model\User;
use think\Cookie;
use think\Model;

abstract class BaseAdminController extends ApplicationController
{
    /**
     * @var User $user 登录的用户
     */
    protected $user;
    // 数据操作之后重定向页面
    protected $redirect_url = '/admin';
    protected $fields = [];

    protected function _initialize()
    {
        parent::_initialize();
        $tokenKey = Cookie::get('token');
        if ($tokenKey == null) {
            $this->redirect('/login');
        }
        $token = Auth::get(['token_key' => $tokenKey]);
        if ($token == null) {
            $this->redirect('/login');
        }
        $this->user = User::get($token->user);
        $this->assign('profile',$this->user->profile);
        $this->assign('user', $this->user);
        $this->assign("tabIndex", $this->getSideTabIndex());
    }

    /**
     * 获取该页的Model
     * @return Model
     */
    abstract function getModel();

    /**
     * 将请求的表单转换数组
     * @return array 返回的数组
     */
    abstract function requestFormToArray();

    /**
     * 保存Model
     */
    public function save()
    {
        $model = $this->getModel();
        $model::create(
            $this->requestFormToArray()
        );
        $this->redirect($this->redirect_url);
    }

    /**
     * 获取请求中的id进行删除
     */
    public function delete()
    {
        $model = $this->getModel();
        $model::destroy([
            $this->request->post("id")
        ]);
    }

    public function modify()
    {
        $model = $this->getModel();
        $model::update(
            $this->requestFormToArray(), [
            "id" => $this->request->post("id")
        ]);
        $this->redirect($this->redirect_url);
    }


    /**
     * @return string 侧边栏状态标签
     */
    protected abstract function getSideTabIndex();
}
