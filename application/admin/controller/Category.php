<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 12:23 PM
 */

namespace app\admin\controller;


use think\Controller;
use app\common\model as Model;

class Category extends BaseAdminController
{
    protected $redirect_url = '/admin/category';

    /**
     * @return string 侧边栏状态标签
     */
    protected function getSideTabIndex()
    {
        return 'category';
    }

    public function index()
    {
        $categoryList = Model\Category::all();
        $this->assign("categoryList", $categoryList);
        return $this->fetch('index');
    }


    public function delete()
    {
        $id = $this->request->post("id");
        Model\Category::destroy(['id' => $id]);
        $this->redirect('/admin/category');
    }

    function getModel()
    {
        return new Model\Category();
    }


    /**
     * 将请求的表单转换数组
     * @return array 返回的数组
     */
    function requestFormToArray()
    {
        return[
            "name"=>$this->request->post("name")
        ];
    }
}
