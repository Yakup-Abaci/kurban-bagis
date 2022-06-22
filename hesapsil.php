<?php
//mysql baglanti kodunu ekliyoruz
include("_mysqlbaglan.php");
//sorguyu hazirliyoruz
extract($_POST);
$tabloadı=$ad."_".$sifre;
$sql = "DROP TABLE $tabloadı" ;
//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
echo "<html>";
//türkçe karakterleri düzgün görüntüleyebilmek için
//eklenmiştir.
echo "<meta http-equiv='Content-Type' ";
echo "content='text/html; charset=UTF-8' />";
if(!$cevap ){
echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
session_start();
session_destroy();
header('Location: _register.php');
}
echo "</html>";
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>