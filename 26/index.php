<?php error_reporting(-1);


/* 1. Напишите функцию get_count($arr), принимающую параметром массив, которая будет возвращать кол-во элементов, полученного массива. Примеры массивов для теста функции:
$arr = [1,2,3,4,5,6,7,8,9,10,];
$goods = [
        [
            'title' => 'Nokia',
            'price' => '100',
            'qty' => '10',
        ],
        [
            'title' => 'Sony',
            'price' => '120',
            'qty' => '7',
        ],
        [
            'title' => 'LG',
            'price' => '105',
            'qty' => '15',
        ],
    ];
*/

function get_count(array $arr): int
{
    $count = 0;
    foreach ($arr as $counter) {
     $count++;
    }
    return $count;
}

$arr = [1,2,3,4,5,6,7,8,9,10,];
$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '15',
    ],
];

echo get_count($arr).'<br>';
echo get_count($goods).'<br>';


// 2. Напишите функцию, принимающую 2 параметра, которая выведет таблицу умножения по полученным множителям

function get_table(int $trArg, int $tdArg)
{
    $table = '<table border="2" width="100%" >';

    for ($tr = 1; $tr <= $trArg; $tr++ ) {
        $table .= "<tr>";
        for ($td = 1; $td <= $tdArg; $td++ ) {
            $table .= "<td> $td * $tr = " . $td * $tr . "</td>";
        }
        $table .= "</tr>";
    }
    $table .= '</table>';
    return $table;
}

echo '<par>' . get_table(9,9); '</par>';