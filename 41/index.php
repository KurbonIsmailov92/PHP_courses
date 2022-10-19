<?php error_reporting(-1);
/**
 * Data base
 */

function debug($data)
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

//$db = mysqli_connect('localhost', 'root', '','world') or die('Error connection!');
$db = mysqli_connect('localhost', 'root', '','world');

//var_dump($db);

$res = mysqli_query($db, "SELECT code, name FROM country LIMIT 10");

//debug(mysqli_fetch_all($res, MYSQLI_ASSOC));

//var_dump($res);

//debug(mysqli_fetch_assoc($res));

/*while ($row = mysqli_fetch_assoc($res)) {
    echo "Code of Country: {$row['code']} / Country: {$row['name']} <br>";
}*/

$name = "d'Artanyan 2";
//$name = mysqli_real_escape_string($db, $name);

var_dump(mysqli_query($db, "INSERT INTO `test` (name) VALUE ('$name')"));


