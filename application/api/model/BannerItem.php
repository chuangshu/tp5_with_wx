<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/29
 * Time: 9:59
 * E-mail: 1397153057@qq.com
 */

namespace app\api\model;


use think\Model;

class BannerItem extends BaseModel
{
    protected $hidden = ['id', 'img_id', 'banner_id', 'update_time', 'delete_time'];

    public function img()
    {
        return $this->belongsTo('Image', 'img_id', 'id');
    }

}