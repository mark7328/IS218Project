<?php
/**
 * Created by PhpStorm.
 * User: mark7
 * Date: 3/16/2019
 * Time: 9:29 AM
 */

class factory
{
    public static function build(Array $fieldNames = null, Array $values = null)
    {
        $record = new record($fieldNames,$values);

        return $record;
    }
}