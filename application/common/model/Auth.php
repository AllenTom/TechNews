<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/3/2017
 * Time: 2:54 PM
 */

namespace app\common\model;


use DateTime;
use think\Config;
use think\Model;

class Auth extends Model
{
    /**
     * 生成用户的Token
     * @param $userId int 用户ID
     * @return string 生成的Token
     * @throws \think\exception\DbException
     */
    public static function createToken($userId)
    {
        $key = Config::get("salt");
        $timestamp = (new DateTime())->getTimestamp();
        $token_key = md5($key . $userId . $timestamp);
        if (Auth::get(['user' => $userId]) != null) {
            self::update([
                'token_key' => $token_key
            ], ["user" => $userId]);
        } else {
            self::create([
                'token_key' => $token_key,
                'user' => $userId,
            ]);
        }
        return $token_key;
    }
}
