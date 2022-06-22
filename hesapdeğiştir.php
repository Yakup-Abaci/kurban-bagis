<?php
session_start();
//mysql baglanti kodunu ekliyoruz
include("_mysqlbaglan.php");
//degiskenleri formdan aliyoruz
extract($_POST);
//sorguyu hazirliyoruz
$ad2=$_SESSION['ad'];
$soyad2;
$telno2;
$eposta2;
$sifre2=$_SESSION['sifre'];
$tabloadı=$ad2."_".$sifre2;
$tabloadı=mb_strtolower($tabloadı);
$a="SELECT * FROM $tabloadı";
$sorgu = mysqli_query($baglanti,$a);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    $soyad2=$sonuc["soyad"];
	$telno2=$sonuc["telno"];
	$eposta2=$sonuc["eposta"]; 
};

$a="SELECT * FROM kurban WHERE adi='$ad2' and soyadi='$soyad2' and eposta='$eposta2' and telno='$telno2' ";
$sorgu = mysqli_query($baglanti,$a);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	/*$sonuc["adi"]=$ad;
    $sonuc["soyadi"]=$soyad;
	$sonuc["telno"]=$telno;
	$sonuc["eposta"]=$eposta;*/
	$sql ="UPDATE kurban SET adi='$ad' , soyadi='$soyad' , eposta='$eposta' , telno='$telno' WHERE adi='$ad2' and soyadi='$soyad2' and eposta='$eposta2' and telno='$telno2';";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
}
$tabloadı2=$ad."_".$sifre;

$sql ="UPDATE $tabloadı ".
"SET
ad='$ad',soyad='$soyad',telno='$telno',eposta='$eposta' , sifre='$sifre' ";

$_SESSION['ad']=$ad;
$_SESSION['sifre']=$sifre;
$b="ALTER TABLE $tabloadı RENAME $tabloadı2";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
//eger cevap FALSE ise hata yazdiriyoruz.
if(!$cevap){
echo '<br>Hata:' . mysqli_error($baglanti);
}
$sorgu2 = mysqli_query($baglanti,$b);
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
header("Location: hesabım.php");


?>