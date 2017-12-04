<?php

namespace app\index\controller;

use app\common\controller\ApplicationController;
use app\common\model\Article;

class Index extends BaseIndexController
{
    public function index()
    {
        $model = new Article();
        $articleList = $model->paginate(3);
        $this->assign("articleList", $articleList);
        return $this->fetch('index');
    }
}
