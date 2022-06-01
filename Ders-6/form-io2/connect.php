<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=uygulama-form;charset=UTF8", "root", "");
    //echo "Bağlantı Başarılı";
} catch (PDOException $e) {
    echo $e->getMessage();
}
