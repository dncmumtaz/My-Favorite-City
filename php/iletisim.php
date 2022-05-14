<?php

error_reporting(0);

if(isset($_POST['gonder'])){
    
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $email=$_POST["email"];
    $cinsiyet=$_POST["cinsiyet"];
    $nereden=$_POST["nereden"];
    $diller=$_POST["dil"];
    $mesaj=$_POST["mesaj"];
    if($ad!="" && $soyad!="" && $email!="" && $cinsiyet!="" && $nereden!="" && $diller!="" && $mesaj!=""){
        echo "Ad Soyad : $ad $soyad <br>";
        echo "E-Mail : $email <br>";
        echo "Cinsiyet : $cinsiyet <br>";
        echo "Konu : $nereden <br>";
        echo "Diller : ";
        foreach ($diller as $key => $value) {
            echo "$value / ";
        }
        echo "<br>Mesaj : $mesaj";
    }
    else{
        header("Location:../html/iletisim.html");
    }
}
else {
    header("Location:../html/iletisim.html");
}
?>
