<?php
/**
 * Created by IntelliJ IDEA.
 * User: TakayamaAren
 * Date: 12/5/2017
 * Time: 12:36 PM
 */

namespace app\admin\validate;

use think\Validate;

class ArticleValidate extends Validate
{
    protected $rule = [
        'title' => 'require|max:25',
        'content' => 'require',
        'category' => 'require'
    ];

    protected $message = [
        'title.require' => '文章标题必须',
        'title.max' => '文章标题最多不能超过25个字符',
        'content.require' => '文章必须要内容',
    ];
    protected $scene = [
        'add'   =>  ['title','content','category'],
        'edit'  =>  ['email'],
    ];
}
