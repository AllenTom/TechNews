<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 2:13 PM
 */

namespace app\common\model;


use think\Config;
use think\Model;

/**
 * @property int id 用户ID
 * @property string password 用户密码
 * @property string username 用户名
 * @property Profile profile 用户信息
 */
class User extends Model
{
    public function profile()
    {
        return $this->hasOne('Profile', 'user');
    }

    public function articles()
    {
        return $this->hasMany('Article', 'author');
    }

    /**
     * 检查用户密码是否正确
     * @param $password string 校验用户密码
     * @return bool
     */
    public function checkPassword($password)
    {
        return $this->password == md5($password . Config::get('salt'));
    }

}
