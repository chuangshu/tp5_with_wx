<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/29
 * Time: 15:09
 * E-mail: 1397153057@qq.com
 */

namespace app\api\model;


class Theme extends BaseModel
{
    protected $hidden=['delete_time','update_time','topic_img_id','head_img_id'];
    public function topicImg()
    {
        return $this->belongsTo('Image','topic_img_id','id');
    }
    public function headImg(){
        return $this->belongsTo('Image','head_img_id','id');
    }
    public function products(){
        return $this->belongsToMany('Poduct','theme_product','product_id','theme_id');
    }
    public function getThemeWithProducts($id){
        $theme = self::with('products,topicImg,headImg')->find($id);
        return $theme;
    }
}