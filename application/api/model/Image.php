<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/29
 * Time: 9:59
 * E-mail: 1397153057@qq.com
 */

namespace app\api\model;


class Image extends BaseModel
{
    protected $hidden = ['id', 'from', 'delete_time', 'update_time'];

    public function getUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value,$data);
    }
}