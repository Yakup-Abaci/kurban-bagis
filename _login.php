<?php
session_start();
require('_mysqlbaglan.php');
if (isset($_POST['ad']) && isset($_POST['sifre'])){

extract($_POST);
$tabloadi=$ad."_".$sifre;
//$tabloadi= mb_strtolower($tabloadi);
$sql = "SELECT * FROM $tabloadi WHERE ";
$sql= $sql . "ad='$ad' and
sifre='$sifre'";
$sorgu = $baglanti->query("SHOW TABLES");
$i=0;
$cevap=TRUE;
while ($tablo = $sorgu->fetch_array()) {
     if($tablo[$i] == $tabloadi){
		 $cevap = mysqli_query($baglanti, $sql);
		 $say = mysqli_num_rows($cevap);
		 break;
	 }	 
}


//eger cevap FALSE ise hata yazdiriyoruz.
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}
//veritabanindan dönen satır sayısını bul

if ($say == 1){
$_SESSION['ad'] = $ad;
$_SESSION['sifre'] = $sifre;
}else{
$mesaj = "<h1> Hatali Kullanici adi veya Şifre!</h1>";
}
}

if (isset($_SESSION['ad'])){
header("Location: _uyesayfasi.php");
}
else{
     header("Location: index.php"); 
     } 
     
?>