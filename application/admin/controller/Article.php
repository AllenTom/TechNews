<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 12:16 PM
 */

namespace app\admin\controller;


use think\Controller;
use app\common\model as Model;

class Article extends BaseAdminController
{
    protected $redirect_url = "/admin/article";

    /**
     * @return string 侧边栏状态标签
     */
    protected function getSideTabIndex()
    {
        return 'article';
    }

    public function index()
    {
        $articleList = Model\Article::all();
        $this->assign("articleList", $articleList);
        return $this->fetch('index');
    }

    public function create()
    {
        $categoryList = Model\Category::all();
        $this->assign("categoryList", $categoryList);
        return $this->fetch("create");
    }

    public function delete()
    {
        $id = $this->request->post("id");
        Model\Article::destroy(['id' => $id]);
        $this->redirect('/admin/article');
    }

    /**
     * 获取该页的Model
     * @return \think\Model
     */
    function getModel()
    {
        return new Model\Article();
    }

    public function edit()
    {
        $id = $this->request->param("id");
        if ($id == null) {
            $this->error("未选择编辑的文章");
        }
        $article = Model\Article::get($id);
        $this->assign("article", $article);
        $categoryList = Model\Category::all();
        $this->assign("categoryList", $categoryList);
        return $this->fetch("edit");

    }

    /**
     * 将请求的表单转换数组
     * @return array 返回的数组
     */
    function requestFormToArray()
    {
        return [
            "title" => $this->request->post('title'),
            "category" => $this->request->post('category'),
            "content" => $this->request->post('content'),
            "author" => $this->user->id,
            "createAt" => date("Y-m-d h:i:s"),
            "updateAt" => date("Y-m-d h:i:s"),
        ];
    }

}
