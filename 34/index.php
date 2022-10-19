<?php error_reporting(-1); //домашка ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport"
          content = "width" = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0,
    minimum-scale = 1.0>
    <meta http-equiv="X-UA-Compatible" content="ie = edge">
    <title>Document</title>
</head>
<body>

<?php
/*if (isset($_POST['name'])) {
    $name = $_POST['name'];
} else {
    $name = '';
}*/
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
?>



<?php if (!trim($name) || !trim($email)): ?>

    <?php if (!empty($_POST)): ?>
        <p>Поля обязательны</p>
    <?php endif; ?>

    <form action="index.php" method="post">
        <p>Name:<input type="text" name="name"></p>
        <p>Email:<input type="text" name="email"></p>
        <p><button type="submit" name="send_form">Send</button> </p>
    </form>

<?php else: ?>

    <p>Name: <?= $_POST['name'] ?></p>
    <p>Email: <?= $_POST['email'] ?></p>

<?php endif; ?>

</body>
</html>