<?php
/**
 * Created by IntelliJ IDEA.
 * User: TakayamaAren
 * Date: 12/5/2017
 * Time: 12:17 AM
 */

namespace app\admin\controller;


use think\Model;
use app\common\model\Profile as ProfileModel;

class Profile extends BaseAdminController
{

    public function setting()
    {
        return $this->fetch("modify_profile");
    }

    public function saveprofile()
    {
        $file = request()->file('avatar');

        // 移动到框架应用根目录/public/uploads/ 目录下
        if ($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'imgs' . DS . 'avatar', "user_" . $this->user->id);
            if ($info) {
                $saveName = $info->getSaveName();
                $this->getModel()->save(
                    ["avatar" => "/imgs/avatar/${saveName}","nickname"=>$this->request->post("nickname")],
                    ["user" => $this->user->id]
                );
            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $this->redirect('/admin/profile/setting');
    }

    /**
     * 获取该页的Model
     * @return Model
     */
    function getModel()
    {
        return new ProfileModel();
    }

    /**
     * 将请求的表单转换数组
     * @return array 返回的数组
     */
    function requestFormToArray()
    {
        // TODO: Implement requestFormToArray() method.
    }

    /**
     * @return string 侧边栏状态标签
     */
    protected function getSideTabIndex()
    {
        return 'profile';
    }
}
