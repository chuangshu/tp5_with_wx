<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/27
 * Time: 19:32
 * E-mail: 1397153057@qq.com
 */

namespace app\lib\exception;


use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $erroCode;

//    需要返回客户端当前请求的URL
    public function render(\Exception $e)
    {

        if ($e instanceof BaseException) {
            //如果是自定义的异常
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->erroCode = $e->errorCode;

        } else {
           if(config('app_debug')) {
               return parent::render($e);
           }else{
               $this->recordErrorLog($e);
               $this->code = 500;
               $this->msg = '服务器内部错误，不想告诉你';
               $this->erroCode = 999;
           }
        }
        $result = Request::instance();
        $result = [
            'msg' => $this->msg,
            'error_code' => $this->erroCode,
            'request_url' => $result->url()
        ];
        return json($result,$this->code);
    }

    private function recordErrorLog(\Exception $e){
        Log::init([
            'type'  => 'File',
            // 日志保存目录
            'path'  => LOG_PATH,
            // 日志记录级别
            'level' => ['error'],
        ]);

        Log::record($e->getMessage(),'error');
    }
}