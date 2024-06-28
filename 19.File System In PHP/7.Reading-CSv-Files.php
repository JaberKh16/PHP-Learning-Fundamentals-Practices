<?php

    function read_csv_file_content($fileName= NULL)
    {
        $content = file_get_contents($fileName);
        print_r( str_getcsv($content) );

    }
    $fileName = "students.csv";
    read_csv_file_content($fileName);

    $csvFile = file($fileName);
    foreach( $csvFile as $line){
        echo $line . PHP_EOL;
    }

    $csvFile = file($fileName);
    foreach( $csvFile as $line){
        $data[] = str_getcsv($line);
        print_r($data);
    }

    // reading using array_map()
    $csv = array_map('str_getcsv', file($fileName));
    print_r($csv);