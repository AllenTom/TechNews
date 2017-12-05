<?php
/**
 * Created by IntelliJ IDEA.
 * User: TakayamaAren
 * Date: 12/5/2017
 * Time: 2:38 PM
 */

namespace app\admin\validate;


use think\Validate;

class CategoryValidate extends Validate
{
    protected $rule = [
        'name' => 'require|max:25',
        'id' => 'require'
    ];

    protected $message = [
        'name.require' => '分类必须有标题',
        'name.max' => '分类最多不能超过25个字符',
        'id.require' => '必须要有分类ID',
    ];
    protected $scene = [
        'add'   =>  ['name'],
        'modify'  =>  ['name','id'],
    ];
}
