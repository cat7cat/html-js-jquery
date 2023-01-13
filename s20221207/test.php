<?php 
    $myArr = [1,2,3,4,5];
    $doubleArr = [];
    foreach ($myArr as $key => $value) {
        array_push($doubleArr,$value);
    }


    print_r($doubleArr);