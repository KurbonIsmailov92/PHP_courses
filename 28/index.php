<?php error_reporting(-1); ?>

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

    <p>fdgiankfn WOEIFNAKDWF OIDHNF DK n os d O kd OP  oj dfojdf j foj dfoj oj dojd folje foj dfoja sdfklomas jas ojs aams ajs doas jdaosjd kodj sodja sodnaos dafd aojfgbopidf bqojef oqn opas dfqasknj fdqow dfalks dfaosj d
    jk df;asjdf aso dfoais bdfoasjndopa sdoansoidn aosda sdoasdn osidna[skd oasjdnbas
    dnaosnda asd
    asn odasndpoinaposdpoij!
    </p>
    <?php

    $nums = [1,2,3,4,5,];

    foreach ($nums as $num):
        echo "<h3>Начинаю выводить цифры</h3>";
        echo "<p>$num</p>";
        echo "<h3>Заканчиваю выводить цифры</h3>";
    endforeach;
    ?>

    <p>fdgiankfn WOEIFNAKDWF OIDHNF DK n os d O kd OP  oj dfojdf j foj dfoj oj dojd folje foj dfoja sdfklomas jas ojs aams ajs doas jdaosjd kodj
        <?php foreach ($nums as $num): ?>
            <?= "<p>$num</p>"; ?>
        <?php endforeach; ?>
        sodja sodnaos dafd aojfgbopidf bqojef oqn opas dfqasknj fdqow dfalks dfaosj d
    jk df;asjdf aso dfoais bdfoasjndopa sdoansoidn aosda sdoasdn osidna[skd oasjdnbas
    dnaosnda asd
    asn odasndpoinaposdpoij! </p>

</body>
</html>


