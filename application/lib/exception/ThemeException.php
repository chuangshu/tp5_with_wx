<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/29
 * Time: 16:13
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code = 404;
    public $msg = '指定主题并不存在，请检查主题ID';
    public $errorCode = 30000;
}