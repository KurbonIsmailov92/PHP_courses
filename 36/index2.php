<?php error_reporting(-1);
session_start();

//$_SESSION['test'] = 'TEST';

//var_dump($_SESSION);

if (!empty($_SESSION['count'])) {
    echo "Вы посетили страницу индекс {$_SESSION['count']} раза";
}

?>

<a href="index.php">Index</a>
