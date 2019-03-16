<?php
/**
 * Created by PhpStorm.
 * User: mark7
 * Date: 3/16/2019
 * Time: 9:19 AM
 */

class csv
{
    static public function getRecords($fileName){
        $file = csvFunctions::openFile($fileName);

        $fieldNames = arrayFunctions::instantiateArray();

        $handle = csvFunctions::getHandle($fileName);

        $count = 0;

        $recordArray = arrayFunctions::instantiateArray();

        if($handle)
        {
            while($row = csvFunctions::getCSVRow($handle))
            {
                $record = csvFunctions::getCSVRow($file);
                if($count == 0)
                {
                    $fieldNames = $record;
                }

                else{
                    $recordArray[] = factory::build($fieldNames, $record);
                }

                $count++;

            }
            csvFunctions::closeCSV($handle);
        }
        return $recordArray;
    }


}