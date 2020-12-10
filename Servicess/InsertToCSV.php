<?php

class InsertToCSV
{
   
    function arrayTocsv($data)
    {
        $currentDate = date('Y-m-d');
        $fileName = $currentDate;

        $fp = fopen($fileName.'.csv', 'w');
        
        fputcsv($fp, array_keys($data['0']));

        foreach ($data as $fields) {
            fputcsv($fp, array_values($fields));
        }
        
        fclose($fp);
    }

}

?>