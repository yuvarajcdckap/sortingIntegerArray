<?php

function sortIntegerArray($arr){
    $dupArr=$arr;
    rsort($arr);
    sort($dupArr);
    print_r($dupArr);
    print_r($arr);
    
}
sortIntegerArray([1,3,2,4,7,8,0,9,12,-10,4,3]);