<?php error_reporting(-1);

$i = 5;

//if ($i == 1){
//    echo 1;
//} elseif ($i == 2) {
//    echo 2;
//} elseif ($i == 3) {
//    echo 3;
//} elseif ($i == 4) {
//    echo 4;
//} else {
//    echo 5;
//}

//

switch ($i) {
    case 1:
    case 2:
    case 3:
        echo "Var is under 4";
        break;
    case 4:
        echo 4;
        break;
    default:
        echo "Var is upper 4";
}