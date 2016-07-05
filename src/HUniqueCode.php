<?php
/**
 * Created by PhpStorm.
 * User: henly
 * Date: 16/7/5
 * Time: 10:23
 */

namespace HLib;


class HUniqueCode
{


    //获取唯一字符串 12位
    public  static function get_unique_code12() {
        $char_id = strtoupper(md5(uniqid(mt_rand(), true)));
        return  substr($char_id, 2, 4)  .
                substr($char_id, 5, 2)  .
                substr($char_id,8, 2)   .
                substr($char_id,15, 2)  .
                substr($char_id,20,2);
    }

    //获取唯一字符串 8 位
    public static function get_unique_code8() {
        $char_id = strtoupper(md5(uniqid(mt_rand(), true)));
        return  substr($char_id, 2, 2) .
                substr($char_id, 5, 1) .
                substr($char_id,8, 2)  .
                substr($char_id,15, 1) .
                substr($char_id,20,2);
    }



}