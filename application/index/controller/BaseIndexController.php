<?php
/**
 * Created by IntelliJ IDEA.
 * User: TakayamaAren
 * Date: 12/4/2017
 * Time: 9:38 PM
 */

namespace app\index\controller;


use think\Controller;

class BaseIndexController extends Controller
{
    protected $headerNavIndex = "Home";
    protected function _initialize()
    {
        parent::_initialize();
        $this->assign("headerNavIndex",$this->headerNavIndex);
    }

}
