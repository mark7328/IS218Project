<?php
/**
 * Created by PhpStorm.
 * User: mark7
 * Date: 3/16/2019
 * Time: 9:21 AM
 */

class arrayFunctions
{
    public static function combineArray(array $key,array $val)
    {
        return array_combine($key, $val);
    }

    public static function instantiateArray()
    {
        return  Array();
    }

    public static function arrayKeys(array $list)
    {
        return array_keys((array) $list);
    }

    public static function arrayCount(array $list)
    {
        return count($list);
    }

}