<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/27
 * Time: 16:41
 * E-mail: 1397153057@qq.com
 */

namespace app\api\validate;


use app\lib\exception\ParameterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    public function goCheck(){
        $request = Request::instance();
        $params = $request->param();
        $result = $this-> batch()-> check($params);
        if(!$result){
            $e = new ParameterException([
                'msg' => $this->error
            ]);

            throw $e;
        }else{
            return true;
        }
    }
}