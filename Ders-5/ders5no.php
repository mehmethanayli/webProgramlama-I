<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziler</title>
</head>

<body>
    <h3>Php'de Diziler Devam</h3>


    <?php

    $isimler = array();

    $isimler[] = "Ahmet";
    $isimler[] = "Mehmet";
    $isimler[0] = "Ayşe";
    $isimler[] = "Nur";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $isimler2 = array();

    $isimler2["isim1"] = "Kerim";
    $isimler2["isim2"] = "Hatice";
    $isimler2["isim3"] = "Burcu";
    $isimler2[] = "Hüseyin";
    $isimler2[] = "Gülcan";

    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";


    $ogrenciDetay = array(
        "id"        => 1,
        "adi"       => "Nurullah",
        "soyadi"    => "Yıldız",
        "bolum"     => "Bilgisayar",
        "yas"       => "25",
        "dersler"   => array(
            "ders1" => "Veri Tabanı",
            "ders2" => "Web Programlama",
            "ders3" => "Mobil Programlama"
        ),
        "sinif"     => "2"
    );
    /* Uygulama: Öğrenci Detayı Dizisini Alt Alta döngüleri kullanarak yazdırınız. */

    echo "<pre>";
    print_r($ogrenciDetay);
    echo "</pre>";

    echo "Öğrencinin Dersleri: <br>";

    echo $ogrenciDetay["dersler"]["ders1"] . "<br>";
    echo $ogrenciDetay["dersler"]["ders2"] . "<br>";
    echo $ogrenciDetay["dersler"]["ders3"] . "<br>";

    /* Uygulama: Öğrenci Detayları Dizisindeki Her Öğrencinin Detaylarını Alt Alta yazdırınız. */
    $ogrenciDetaylari = array(
        "ogrenci1" => array(
            "id"        => 1,
            "adi"       => "Nurullah",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => "25",
            "dersler"   => array(
                "ders1" => "Veri Tabanı",
                "ders2" => "Web Programlama",
                "ders3" => "Mobil Programlama"
            ),
            "sinif"     => "2"
        ),
        "ogrenci2" => array(
            "id"        => 1,
            "adi"       => "Ayşen",
            "soyadi"    => "Güler",
            "bolum"     => "Makine",
            "yas"       => "22",
            "dersler"   => array(
                "ders1" => "Matematik",
                "ders2" => "Sayı Teorileri",
                "ders3" => "Model Geliştirme"
            ),
            "sinif"     => "4"
        )
    );

    ?>

    <hr>
    <h3>Koşul İfadeleri (If-Else)</h3>
    <p>İf-Else Bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>


    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> != ($a != $b) Eşit değil ise. (Genellikle Matematiksel bir karşılaştırma yapılır.)</li>
        <li> !== ($a !== $b) Denk değil ise. (Genellikle String bir karşılaştırma yapılır.)</li>
        <li> > ($a > $b) Büyük ise.</li>
        <li> >= ($a >= $b) Büyük veya eşit ise.</li>
        <li>
            < ($a < $b) Küçük ise.</li>
        <li>
            <= ($a <=$b) Küçük veya eşit ise.</li>

    </ol>

    <h5>Mantıksal Operatörler</h5>
    <ol>
        <li> ! (olumsuzsa) (!$a) --> $a'nın değeri False ise True döner. Aksini yapar olumsuz mu diye sorar. </li>
        <li> && - AND (ve) ($a && $b ) --> $a ve $b'nin değeri olumlu ise True döner, iki koşul da sağlanmak zorundadır. Koşullardan bir tanesi false dönerse genel değer False olur. </li>
        <li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner. Herhangi birisinin koşulu sağlaması genel dönüşü True yapar. </li>
    </ol>

    <h4>Not:</h4>

    <ol>
        <li>Elseif sürekli tekrar eden sorgu bloğu açar.</li>
        <li>Else son kapanış koşuludur. (Herhangi bir şart belirtilmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son koşulu ifade eder.)</li>
    </ol>

    <?php

    /*     if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else {
        # code...
    } */


    $sayi1 = 123;
    $sayi2 = 345;
    $metin = "Adü";

    /* Değer Varsa */
    if ($sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı : $sayi1";
    }

    /* Değer Yoksa */
    if (!$sayi1) {
        echo "<br>If bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı";
    }

    /* eşitlik Varsa */
    if ($sayi1 == $sayi2) {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    } else {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    /* eşitlik Yoksa Varsa */
    if ($sayi1 != $sayi2) {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    } else {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    }

    /* Denklik Varsa */
    if ("ogrenci" === "ogrenci") {
        echo "<br>Girilen değerler aynı";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* Denklik Varsa */
    if ($metin === "Adü") {
        echo "<br>Girilen değerler aynı : $metin";
    } else {
        echo "<br>Girilen değerler aynı değil.";
    }

    /* And Örneği */
    if (($sayi1 < $sayi2) and ("ogrenci" === "ogrenci")) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }

    /* OR Örneği */
    if (($sayi1 < $sayi2) or (15 > 25)) {
        echo "<br>Koşullar Sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı.";
    }


    if ($sayi1 > $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }

    if ($sayi1 >= $sayi2) {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
    } else {
        echo "<br> \$sayi1 Değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }



    /* uygulama: 
    1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. 
    2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız.
    3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız. */

    ?>





    <br><br> <br><br>
</body>

</html>