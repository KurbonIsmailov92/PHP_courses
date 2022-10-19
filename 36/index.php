<?php error_reporting(-1);
//сессии в РНР

session_start();

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
/*$_SESSION['test'] = 'TEST';
$_SESSION['test2'] = 'TEST 2';*/

var_dump($_SESSION);
unset($_SESSION['test'], $_SESSION['test2'])

?>

<a href="index2.php">Index2</a>
