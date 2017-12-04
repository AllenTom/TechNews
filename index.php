<?php
/**
 * Created by PhpStorm.
 * User: TakayamaAren
 * Date: 12/1/2017
 * Time: 7:08 PM
 */

if (!defined('__PUBLIC__')) {
    $_public = rtrim(dirname(rtrim($_SERVER['SCRIPT_NAME'], '/')), '/');
    define('__PUBLIC__', (('/' == $_public || '\\' == $_public) ? '' : $_public).'/public');
}
// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';