<?php
/**
 * Created by PhpStorm.
 * User: mark7
 * Date: 3/14/2019
 * Time: 10:13 AM
 */

class main
{
    function start($csvPath){
        $records = File::Readcsv($csvPath);
        $html = html::createtable($records);
        utility::print_html($html);
}

}

main::start($csvPath);
