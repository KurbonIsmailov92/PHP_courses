<?php error_reporting(-1);

//$i = 1;
//while ($i <= 10) {
//    echo "{$i}<br>";
//    $i++;
//}

for ($i = 20; $i >= 1; $i--) {
    echo "{$i}<br>";
}


echo "<select>";
for ($year = 2000; $year <= 2021; $year++) {
    echo "<option value= '{$year}'> {$year}</option>";
}
echo "</select>";


echo '<table border="2" width="100%" >';

for ($tr = 1; $tr < 10; $tr++ ) {
    echo "<tr>";
    for ($td = 1; $td < 10; $td++ ) {
        echo "<td> $td * $tr = " . $td * $tr . "</td>";
    }
    echo "</tr>";
}
echo '</table>';

//$tr = 1;
//while ($tr < 10) {
//    echo "<tr>";
//    $td = 1;
//    while ($td < 10) {
//        echo "<td> $td * $tr = " . $td * $tr . "</td>";
//        $td++;
//    }
//    echo "</tr>";
//    $tr++;
//}
//echo '</table>';

