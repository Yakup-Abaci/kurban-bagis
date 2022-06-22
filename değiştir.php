<?php
//oturumu başlat
session_start();
//eğer username adlı oturum değişkeni yok ise
//login sayfasına yönlendir
if ( !isset($_SESSION['ad']) ) {
header("Location: _register.php");
exit();
}
include("_mysqlbaglan.php");
extract($_POST);
$ad= $_SESSION['ad'];
$sifre= $_SESSION['sifre'];
$tabloadı=$ad."_".$sifre;
$soyad;
$telno;
$eposta;
$tabloadı=$ad."_".$sifre;
$tabloadı=mb_strtolower($tabloadı);

$a="SELECT * FROM $tabloadı";
$sorgu = mysqli_query($baglanti,$a);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    $soyad=$sonuc["soyad"];
	$telno=$sonuc["telno"];
	$eposta=$sonuc["eposta"]; 
}
$a="SELECT bağışfiyatı,bağıştürü,gidecek_yer FROM kurban WHERE id='$id'; ";
$sorgu = mysqli_query($baglanti,$a);
echo $id;
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	/*$sonuc["adi"]=$ad;
    $sonuc["soyadi"]=$soyad;
	$sonuc["telno"]=$telno;
	$sonuc["eposta"]=$eposta;*/
	$sql ="UPDATE kurban SET bağışfiyatı='$bağışfiyatı' , bağıştürü='$bağıştürü' , gidecek_yer='$gidecek_yer' WHERE id='$id';";
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
}
mysqli_close($baglanti);
//header("Location: hesabım.php");


?>