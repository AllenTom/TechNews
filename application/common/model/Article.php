<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 1:58 PM
 */

namespace app\common\model;

use think\Model;

class Article extends Model
{
    public function user()
    {
        return $this->belongsTo('User', 'author');
    }
    public function articleCategory()
    {
        return $this->belongsTo('Category', 'category');
    }
}
