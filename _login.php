<?php
session_start();
require('_mysqlbaglan.php');
if (isset($_POST['ad']) && isset($_POST['sifre'])){
	if($_POST['ad']=='' && $_POST['sifre']=='')
extract($_POST);
$tabloadı=$ad."_".$sifre;
$tabloadı= mb_strtolower($tabloadı);
$sql = "SELECT * FROM $tabloadı WHERE ";
$sql= $sql . "ad='$ad' and
sifre='$sifre'";
$sorgu = $baglanti->query("SHOW TABLES");
$i=0;
$cevap=TRUE;
while ($tablo = $sorgu->fetch_array()) {
	echo $tablo[$i];
     if($tablo[$i] == $tabloadı){
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
$mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>";
}
}
if (isset($_SESSION['ad'])){
header("Location: _uyesayfasi.php");
}
else{ header("Location: _register.php"); } 
?>