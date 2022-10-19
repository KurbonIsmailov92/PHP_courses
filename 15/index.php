<?php
//echo '<button>';
echo '<table border="2" width="100%" >';

$tr = 1;
while ($tr <= 10) {
    echo "<tr>";
    $td = 1;
    while ($td <= 20) {
        echo "<td>{$td}</td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}
echo '</table>';
//echo '</button>';