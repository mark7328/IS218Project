<?php
/**
 * Created by PhpStorm.
 * User: mark7
 * Date: 3/16/2019
 * Time: 9:30 AM
 */

class csvFunctions
{
    public static function openFile($fileName)
    {
        return fopen($fileName,"r");
    }

    public static function getCSVRow($handle)
    {
        return fgetcsv($handle,1000,",");
    }

    public static function closeCSV($handle)
    {
        return fclose($handle);
    }

    public static function getHandle($fileName)
    {
        $handle = csvFunctions::openFile($fileName);

        return $handle;
    }
}