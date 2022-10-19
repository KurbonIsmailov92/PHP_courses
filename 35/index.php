<?php error_reporting(-1); //Загрузка файлов
if (!empty($_FILES)) {
    echo '<pre>';

    print_r($_FILES);
    if (move_uploaded_file($_FILES['file']['tmp_name'], "upload/{$_FILES['file']['name']}")) {
        echo 'Success';
    } else {
        echo 'Error';
    };

    echo '</pre>';
}

//    echo $_SERVER['SERVER_NAME'];
//    echo $_SERVER['QUERY_STRING'];
 if (!empty($_SERVER['HTTP_REFERER'])) {

     echo $_SERVER['HTTP_REFERER'];

 }

?>

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
<form  method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Send</button>

</form>
</body>
</html>


