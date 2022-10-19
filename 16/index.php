<?php error_reporting(-1);
//1 homework
$year = 1900;
echo "<select>";
while ($year <= 2021) {
    echo "<option value= '{$year}'> {$year}</option>";
    $year++;
}
echo "</select>";




// 2 homework
echo '<table border="2" width="100%" >';

$tr = 1;
while ($tr < 10) {
    echo "<tr>";
    $td = 1;
    while ($td < 10) {
        echo "<td> $td * $tr = " . $td * $tr . "</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo '</table>';
