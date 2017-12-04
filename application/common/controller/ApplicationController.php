<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 2:10 PM
 */

namespace app\common\controller;
use think\Controller;

class ApplicationController extends Controller
{
    public function index(){
        return $this->fetch("index");
    }
}