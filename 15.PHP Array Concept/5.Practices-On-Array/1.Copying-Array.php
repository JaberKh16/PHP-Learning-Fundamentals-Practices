<?php
    /*
        Copying Array Examples
        ======================
        1. Through Assignment
        2. Through Looping

    */
?>
<?php

// define the array
$names = ['JK', 'JH', 'Rk', 'Rm', 'XX'];

// define the empty array
$names_list = [];

// copying via assignment
$names_list = $names;
var_dump($names_list);

// copying through looping
$another_list = array();
foreach($names as $value){
    $another_list[] = $value;
}
var_dump($another_lis);

//Sample 3
$arr3 = [ "3" => "John", "1" => "Ajit", "2" => "Roger"];
$arr4 = $arr3;
var_dump($arr4);

//Sample 4
$arr5 = [];
foreach($arr4 as $key => $value){
    $arr5[$key] = $value;
}
var_dump($arr5);
