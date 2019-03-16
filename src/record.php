<?php
/**
 * Created by PhpStorm.
 * User: mark7
 * Date: 3/16/2019
 * Time: 9:32 AM
 */

class record
{
    public function __construct(Array $fieldNames = null, $values = null)
    {
        $record = arrayFunctions::combineArray($fieldNames,$values);

        foreach ($record as $property => $value)
        {
            $this -> createProperty($property,$value);
        }

    }

    public function returnArray()
    {
        $array = (array) $this ;

        return $array;
    }

    public function createProperty($column,$rowEntry)
    {
        $this -> {$column} = $rowEntry;
    }

}