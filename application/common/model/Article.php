<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 1:58 PM
 */

namespace app\common\model;

use think\Model;

/**
 * Class Article
 * 文章Model
 * @author takayamaaren
 * @package app\common\model
 * @property int id ID
 * @property string title 标题
 * @property string content 文章内容
 * @property string createAt 创建时间
 * @property string updateAt 修改时间
 * @property User user 文章作者
 * @property Category articleCategory 文章分类
 * @property int view_count 浏览次数
 */
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
