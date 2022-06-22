<!DOCTYPE html>
<?php
require ('_mysqlbaglan.php');
$sayi=0;
if (isset($_POST['ad']) && isset($_POST['sifre'])){
extract($_POST);

if($ad==NULL || $soyad==NULL ||  $telno==NULL || $eposta==NULL || $sifre==NULL){
	$sayi=1;
		
}
else{
$tabloadı=$ad."_".$sifre;
$tablo="CREATE TABLE $tabloadı(
ad varchar(255),
soyad varchar(255),
telno text,
sifre text,
eposta text
)";
$baglanti->query($tablo);
 //sifre metni SHA256 ile şifreleniyor.
//$sifre = hash('sha256', $sifre);
//header("Location: _tablooluştur.php");
$sql="INSERT INTO $tabloadı (ad, soyad, eposta, telno, sifre)";
$sql = $sql . "VALUES ('$ad', '$soyad','$eposta','$telno','$sifre')";
$cevap = mysqli_query($baglanti, $sql);
if ($cevap){
header("Location: _uyesayfasi.php");	
}else{
$mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>";
}
}

}
?>

<html>
<meta http-equiv="Content-Type" content="text/html;
charset=UTF-8" />
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style type="text/css">
body {
    font-family: Verdana, monospace, sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
	display: flex;
}
#tamamı { 
	border-style: ridge ;
    width:100%;
    height: 100%;
	background-color: #449D44;

}
.altkısım{
	display: flex;
    width: 100%;
    height: 100%;
    padding: 10px;
    background-color: white;
}
.kayıtalma{
    width: 400px;
    padding: 10px;
 margin-left:50px;
  margin-top:50px;
  display:hidden;

}
.yazılar{
	width: 1000px;

}

.giriş{
    width: 400px;
    height: 700px;
    padding: 10px;
	margin-left:150px;
    background-color: white;
}

.üstkısım { 
    width:1500px;
    height: 75px;
	display: flex;
}
.kayıt { 
    height: 75%;
}
.uyarı { 

    height: 25%;
}
</style>


<!-- türkçe karakter desteği ayarı -->
<meta http-equiv="Content-Type" content="text/html;
charset=UTF-8" />
<body>
<div id="tamamı">

<div class="üstkısım">
<form action="_login.php" method="POST">
<nav class="navbar bg-success;" style="height:70px ;" >
<div class="container-fluid">
<ul class="nav navbar-nav" >
<li class="active"><h3><font color="white"><b>KURBAN BAĞIŞ VE BİLGİ EKRANI</b></font></h3></li>
<li><p style="margin-top:20px"><font size="3" face="block" color="white">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Hesabınız var ise hemen giriş yapın.<br /></font></p></li>
<form action="_login.php" method="POST">
<li><font size="2" face="block" color="white">&emsp;Adınızı giriniz:</font><span style="color:red;">*</span>:<br />
&emsp;<input type="text" id="ad" name="ad"></li>
<li><font size="2" face="block" color="white">&emsp;Şifrenizi giriniz:</font><span style="color:red;">*</span>:<br />
&emsp;<input type="text" id="sifre" name="sifre"></li>
<li>&emsp;<button type="submit" class="btn btn-default" style="margin-top:10px">GÖNDER</button></li>

</ul>
</div>
</nav>
</form>
</div>
<div class="altkısım" style="background-color:#dbd2d5;">
<div class="yazılar">
<img src="kurban10.jpg"  width="1000" height="600" alt="Kurban" align="right"/>
</div>
<div class="kayıtalma">
<div class="kayıt">
<p><font size="5" face="block" >Hesabınız yok mu?. Hemen kaydolun.</font></p>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table>
<tr>
<div class="input-group mb-3 , col-xs-12" >
  <input type="text" id="ad" name="ad" class="form-control" placeholder="Adınızı giriniz" aria-label="Username" aria-describedby="basic-addon1">
</div>
</tr>
<br />
<tr>
<div class="input-group mb-3 , col-xs-12">
  <input type="text" id="soyad" name="soyad" class="form-control" placeholder="Soydınızı giriniz" aria-label="Username" aria-describedby="basic-addon1">
</div>
</tr>
<br />
<tr>
<div class="input-group mb-3 , col-xs-12">
  <input type="text" id="eposta" name="eposta" class="form-control" placeholder="Eposta adresinizi giriniz" aria-label="Username" aria-describedby="basic-addon1">
</div>
</tr>
<br />
<tr>
<div class="input-group mb-3 , col-xs-12">
  <input type="text" id="telno" name="telno" class="form-control" placeholder="Telefon Numaranızı giriniz" aria-label="Username" aria-describedby="basic-addon1">
</div>
</tr>
<br />
<tr>
<div class="input-group mb-3 , col-xs-12">
  <input type="text" id="sifre" name="sifre" width="300"class="form-control" placeholder="Şifre" aria-label="Username" aria-describedby="basic-addon1">
</div>
</tr>
<br />

</table>

<br />
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<button type="submit" class="btn btn-success" style="margin-top:10px">Hesap Aç</button>
</form>


</div>
<br /><br /><br />
<div class="uyarı">
<table >
<tr><td>
<?php
if($sayi==1){
		if (isset($_POST['ad']) && isset($_POST['sifre'])){
		//echo "<td style='width:50px; height:50px'>Merhaba</td>";
		echo "<div class='alert alert-danger alert-dismissible fade in'>";
        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
        echo "<strong>HATA!</strong> Bilgileri tam doldurmanız gerekmektedir.";
		 echo "</div>";	
    //<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>;
    //<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.;

}
}
else{;}
?>
</tr>
</table>
 </div>
 
</div>
</div>
</div>




</body>
</html>

