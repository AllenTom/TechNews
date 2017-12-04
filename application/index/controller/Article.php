<?php
/**
 * Created by IntelliJ IDEA.
 * User: TakayamaAren
 * Date: 12/4/2017
 * Time: 9:06 PM
 */

namespace app\index\controller;


use think\Controller;
use app\common\model\Article as ArticleModel;
use app\common\model\Category as CategoryModel;

class Article extends BaseIndexController
{
    protected $headerNavIndex = "Article";
    public function index()
    {
        $id = $this->request->param("id");
        $article = ArticleModel::get($id);
        $this->assign("article", $article);
        $this->assign("articleProfile",$article->user->profile);
        return $this->fetch('index');
    }
}
