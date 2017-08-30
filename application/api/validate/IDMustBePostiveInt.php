<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/27
 * Time: 16:01
 * E-mail: 1397153057@qq.com
 */

namespace app\api\validate;

use think\Validate;

class IDMustBePostiveInt extends BaseValidate
{
    protected $rule = [
        'id' => 'require|isPostiveInteger'
    ];
    protected $message = [
        'id' => 'id必须是正整数'
    ];

}