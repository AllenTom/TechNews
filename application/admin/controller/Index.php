<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/1/2017
 * Time: 6:55 PM
 */

namespace app\admin\controller;

use think\Controller;
use app\common\model;
use think\db\Query;

class Index extends BaseAdminController
{


    public function index()
    {
        $recentlyArticle = model\Article::scope(function (Query $query) {
            $query->limit(5)->order("createAt", "desc");
        })->select();
        $this->assign("recentlyArticle", $recentlyArticle);
        $recentlyCategory = model\Category::scope(function (Query $query) {
            $query->limit(5)->order("id", "desc");
        })->select();
        $this->assign("recentlyCategory", $recentlyCategory);
        return parent::index();
    }

    /**
     * @return string 侧边栏状态标签
     */
    protected function getSideTabIndex()
    {
        return 'home';
    }

    /**
     * 获取该页的Model
     * @return Model
     */
    function getModel()
    {
        // TODO: Implement getModel() method.
    }

    /**
     * 将请求的表单转换数组
     * @return array 返回的数组
     */
    function requestFormToArray()
    {
        // TODO: Implement requestFormToArray() method.
    }
}
