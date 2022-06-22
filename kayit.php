<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>
</html>
<?php
//oturumu başlat
session_start();
//eğer username adlı oturum değişkeni yok ise
//login sayfasına yönlendir
if ( !isset($_SESSION['ad']) ) {
header("Location: index.php");
exit();
}
else{
extract($_POST);
if($bağışfiyatı=='' && $bağıştürü=='' && $kurbanyeri==''){
header("Location: bağış.php");
exit();
}
else{
include("_mysqlbaglan.php");
//sorguyu hazirliyoruz
$ad=$_SESSION['ad'];
$soyad;
$telno;
$eposta;
$sifre=$_SESSION['sifre'];
$tabloadı=$ad."_".$sifre;
//$tabloadı= mb_strtolower($tabloadı);
$a="SELECT * FROM $tabloadı";
$sorgu = mysqli_query($baglanti,$a);
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
    $soyad=$sonuc["soyad"];
	$telno=$sonuc["telno"];
	$eposta=$sonuc["eposta"]; 
}
//$cikti = $sorgu->fetch_array();
//$soyad=$cikti["soyad"];
//$eposta=$cikti["eposta"];
//$telno=$cikti["telno"];
$sql = "INSERT INTO kurban ".
"(adi,soyadi,telno,eposta,bagisfiyati,bagisturu,gidecek_yer) ".
"VALUES ( '$ad','$soyad','$telno','$eposta','$bagisfiyati' , '$bagistürü' , '$kurbanyeri')";
//sorguyu veritabanina gönderiyoruz. 
$cevap = mysqli_query( $baglanti,$sql);
//eger cevap FALSE ise hata yazdiriyoruz.
if(!$cevap){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
$ad=$_SESSION['ad'];
$sifre=$_SESSION['sifre'];
//$tablo=$ad."_".$sifre;
//$ali="SELECT ad FROM $tablo WHERE 1";
//$cevap2 = mysqli_query($baglanti, $ali);
//echo $cevap2;
//$say = mysqli_num_rows($cevap2);
//$say++;
$sorgu="SELECT * FROM kurban WHERE adi='$ad' and telno='$telno' and soyadi='$soyad' and eposta='$eposta'";
$sorgu2 = mysqli_query($baglanti, $sorgu);

header("Location: bağış.php");
}
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
}
}
?>