<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 12:37 PM
 */

namespace app\register\controller;

use think\Controller;

class Index extends Controller
{
    public function index(){
        return $this->fetch("index");
    }
}