<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/27
 * Time: 19:35
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的Banner不存在';
    public $errorCode = 40000;

}