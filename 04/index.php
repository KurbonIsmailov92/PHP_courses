<?php
    error_reporting(0);
    $varForTitleLesson4 = 'Урок 4!';
//    $winnieThePooh = "Hello I'm Winnie. \"Страока в кавычках\"";
    $fruit = 'orange';
    $winnieThePooh = "Hello I'm Winnie. I have 2 {$fruit}s";
    $var = 'test 1';
    $Var = 'test 2';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0>
    <meta http-equiv="X-UA-Complatible" content="ie=edge">
    <title><?= $varForTitleLesson4; ?></title>
</head>
<body>
    <?php $varForTitleLesson4 = 'Урок 4'; ?>
    <h1><?php echo $varForTitleLesson4; ?></h1>
    <p><?= $winnieThePooh; ?></p>
<?php
  var_dump($var, $Var);
  echo $var," ", $Var;
      ?>



</body>
</html>