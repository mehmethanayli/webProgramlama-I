<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "<h4>Tırnak İşaretleri Arasındaki Farklar</h4>";

    $uni = "Adnan Menderes Üniversitesi";
    echo "Değişken İçeriği: $uni";
    echo "<br>";
    /* Değişkenin ismini yazdırır. */
    echo "1-Kazandığınız Üniversite: " . '$uni';
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "2-Kazandığınız Üniversite: " . "$uni";
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "3-Kazandığınız Üniversite: " . $uni;
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "4-Kazandığınız Üniversite: $uni";

    echo "<hr><h4>Temel Matematiksel İşlemler</h4>";
    
    echo "<h5>Toplama İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 + $sayi2 = ' . $sayi1 + $sayi2;
    echo "<br>";
    echo "$sayi1 + $sayi2 = " .  $sayi1 + $sayi2;
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";


    echo phpinfo();


    ?>


<br><br><br><br><br><br><br><br><br><br><br><br>


</body>

</html>