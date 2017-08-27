<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/27
 * Time: 19:32
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
//    HTTP状态码
    public $code = 400;
//    错误具体信息
    public $msg =  '参数错误';
//    自定义的错误码
    public $errorCode = 10000;

}