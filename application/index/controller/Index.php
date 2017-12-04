<?php

namespace app\index\controller;

use app\common\controller\ApplicationController;
use app\common\model\Article;

class Index extends BaseIndexController
{
    public function index()
    {
        $model = new Article();
        $articleList = $model->paginate(6);
        $this->assign("articleList", $articleList);
        dump($articleList[0]->category);
        return $this->fetch('index');
    }
}
