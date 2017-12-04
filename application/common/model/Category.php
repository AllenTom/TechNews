<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 3:52 PM
 */

namespace app\common\model;


use think\Model;

class Category extends Model
{
    public function articles()
    {
        return $this->hasMany('Article', 'category');
    }
}
