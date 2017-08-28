<?php
/**
 * Created by PhpStorm.
 * User: fixright
 * Date: 2017/8/27
 * Time: 18:49
 * E-mail: 1397153057@qq.com
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    public static function getBannerByID($id){
//       $result = Db::query('select * from banner_item where banner_id = ?',[$id]);
        $result = Db::table('banner_item')->where('banner_id','=',$id)->select();
       return $result;
    }
}