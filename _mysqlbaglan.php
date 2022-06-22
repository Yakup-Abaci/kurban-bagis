
<!DOCTYPE html>
<?php
$server='sql210.epizy.com';
$user='epiz_32008610';
$password='VJBRg2bjZuI';
$database='epiz_32008610_yakup';
$baglanti=mysqli_connect($server,$user,$password,$database);

if(!$baglanti){
echo "MySQL sunucu ile baglanti kurulamadi! </br>";
echo "HATA: " . mysqli_connect_error();
exit;

}
?>