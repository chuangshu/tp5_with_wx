<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/29
 * Time: 15:33
 * E-mail: 1397153057@qq.com
 */

namespace app\api\validate;


class IDCollection extends BaseValidate
{
    protected $rule = [
        'ids' => 'require|checkIDs'
    ];

    protected $message = [
        'ids' => 'id参数必须是以逗号分隔得多个正整数'
    ];

    protected function checkIDs($value){
        $values = explode(',',$value);
        if(empty($values)){
            return false;
        }
        foreach ($values as $id){
            if(!$this->isPostiveInteger($id)){
                return false;
            }
        }
        return true;
    }
}