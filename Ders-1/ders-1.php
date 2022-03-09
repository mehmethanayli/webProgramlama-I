<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programlama-I</title>
</head>

<body>
    <!-- Açıklama Satırı -->
    <?php
    // Açıklama Satırı
    /* Açıklama Satırı Bloğu
       Shift+Alt+a
    */
    /* Kullanılan Komutlar
    echo: Ekrana yazdırma işlemi yapar.
        İçerisinde html etiketleri kullanılabilir. 
        Çift veya tek tırnak ile kullanılabilir.
        Çift tırnak içerisinde değişken içerikleri gösterilir. 
        Nokta işareti(.) ile birleştirme yapılabilir.
        \ Kaçış karakteridir. Özel ifadelerden önce kullanılır.
    */
    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo '<h4>Aydın Meslek Yüksekokulu</h4>';
    echo "Bilgisayar Programcılığı " . " Web Teknolojileri" . "<br>";
    echo "Bilgisayar Programcılığı" . "<br>" .  "Web Teknolojileri";

    echo "<hr> <h4> Değişken Tanımlama Kurulları</h4>";
    echo "<ol>
            <li>Değişken isimleri $ ile başlar. </li>
            <li>Değişken isimleri sayısal bir ifade ile başlayamaz. </li>
            <li>Değişken isimlerinde boşluk kullanılmaz. İki Kelime varsa birinci_sinif birinciSinif birinci-sinif örneklerdeki kullanımlar önerilir. </li>
            <li>Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalıdır. </li>
            <li>Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. \$sayi != \$Sayi </li>
            <li>Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak (\") veya tek tırnak (') kullanılır. </li>
            <li>Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır. </li>
            <li>Değişken ismi, değişkenin içeriğini ifade etmelidir</li>
            <li>Değişkenler ekrana echo komutu ile yazdırılır.</li> 
            </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";

    $isim = "Ahmet";
    $soyisim = "Davut";
    $yas = 34;

    echo $isim . " " . $soyisim;
    echo "<br>";
    echo "$isim $soyisim";

    /* Uygulama:
        Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
        Girilen bu değişkenlerin değerlerini bir html tablo veya form içerisinde gösteriniz.
    */
    $uni    = "ADÜ";
    $myo    = "AYMES";
    $ad     = "Selin";
    $soyad  = "Demir";
    $no     = 123;

    ?>

    <form action="">
        <label for="uni">Üniversite</label>
        <input type="text" name="" disabled value="<?php echo $uni; ?>" id="uni"><br>

        <label for="myo">MYO</label>
        <input type="text" name="" disabled value="<?php echo $myo; ?>" id="myo"><br>

        <label for="ad">Ad</label>
        <input type="text" name="" disabled value="<?php echo $ad; ?>" id="ad"><br>

        <label for="soyad">Soyad</label>
        <input type="text" name="" disabled value="<?php echo $soyad; ?>" id="soyad"><br>

        <label for="no">No</label>
        <input type="text" name="" disabled value="<?php echo $no; ?>" id="no"><br>
    </form>



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>