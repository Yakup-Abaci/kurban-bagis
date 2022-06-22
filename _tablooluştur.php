<?php 
require ('_mysqlbaglan.php');
if (isset($_POST['ad']) && isset($_POST['sifre'])){
extract($_POST);
$tabloadı=$ad."_".$sifre;
$tabloadı=mb_strtolower($tabloadı);
$tablo="CREATE TABLE $tabloadı(
ad varchar(255),
soyad varchar(255),
telno text,
sifre text,
eposta text
)";
header("Location: _register.php");
}
?>
