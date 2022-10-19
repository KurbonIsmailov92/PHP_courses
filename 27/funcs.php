<?php error_reporting(-1);

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