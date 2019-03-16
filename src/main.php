<?php

/**
 * Created by PhpStorm.
 * User: martin
 * Date: 3/16/2019
 * Time: 9:14 AM
 */

class main
{
    private $html;

    public function __construct()
    {

        $arrayObjects = csv::getRecords("../data/data.csv");

        $keys = arrayFunctions::arrayKeys((array)$arrayObjects[0]);

        $keyCount = arrayFunctions::arrayCount($keys);

        $count = arrayFunctions::arrayCount($arrayObjects);

        htmlTags::printBeginOfTable();

        for ($x = 0; $x < $keyCount; $x++) {
            $this ->html .= htmlTags::tHeaderColumn($keys[$x]);
        }

        htmlTags::printRowEndBodyStartForTable();


        for ($y = 0; $y < $count; $y++) {
            $this ->html .= htmlTags::tableRowStart();
            for ($z = 0; $z < $keyCount ; $z++) {
                $value = $keys[$z];
                $this->html .= htmlTags::rowEntry(($arrayObjects[$y]->$value));
            }

            $this -> html.= htmlTags::tableRowEnd();
        }
    }

    public function __destruct()
    {
        print($this -> html);
    }
}