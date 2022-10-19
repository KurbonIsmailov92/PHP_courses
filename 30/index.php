<?php error_reporting(-1);

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$nums = [1,2,3,1,4,5,3,2,6,7,7,8,8,9,2,5,];

function user_count(array $array):int
{
    $count=0;
    foreach ($array as $element) {
        $count++;
    }
    return $count;
}

debug(user_count($nums));

function user_sum(array $array)
{
    $sum=0;
    foreach ($array as $element) {
        $sum += $element;
    }
    return $sum;
}
debug(user_sum($nums));
debug(array_sum($nums));

$newArray = [];
for($i = 1; $i <= 100; $i++) {
    $newArray[] = $i ;
    //array_push
}


$otherNewArray = range(1,100);
debug($otherNewArray);