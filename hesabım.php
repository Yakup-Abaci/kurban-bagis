<?php
//oturumu başlat
session_start();
//eğer username adlı oturum değişkeni yok ise
//login sayfasına yönlendir
if ( !isset($_SESSION['ad']) ) {
header("Location: index.php");
exit();
}
include("_mysqlbaglan.php");
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
    //$bağışfiyatı=$sonuc["bağışfiyatı"];
	//$bağıştürü=$sonuc["bağıştürü"];
	//$gidecek_yer=$sonuc["gidecek_yer"];
}
$sorgu="SELECT * FROM kurban WHERE adi='$ad' and telno='$telno' and  eposta='$eposta'";
$sorgu2 = mysqli_query($baglanti, $sorgu);
$sorgu3 = mysqli_query($baglanti, $sorgu);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
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
.altkısım{
	display: hidden;
    width: 100%;
    height: 100%;
    padding: 10px;
    background-color: white;
}
.anasayfa { 
	border-style: ridge ;
    width: 1200px;
    height: 500px;
    padding: 50px;
	margin-left:90px;
    background-color: white;
}

.üstkısım { 
    width:1500px;
    height: 100px;
    background-color: white;
	display: flex;
}

#tamamı { 
	border-style: ridge ;
    width:100%;
    height: 100%;
    background-color: white;
}

.kurban{
width: 130px;
height: 60px;
margin-left:60px;
margin-top:60px;
}
.hakkımızda{
width: 60px;
height: 60px;
margin-left:60px;
margin-top:60px;
}
.bağış{
width: 100px;
height: 60px;
margin-left:60px;
margin-top:60px;
}
.hesabım{
width: 100px;
height: 60px;
margin-left:60px;
margin-top:60px;
}
.iletişim{
width:150px;
height: 60px;
margin-left:300px;
margin-top:10px;
}
.Anasayfa2{
width: 60px;
height: 60px;
margin-left:100px;
margin-top:60px;
}

.çıkış{
width: 200px;
height: 60px;
margin-left:200px;
margin-top:60px;
}

.kayıtalma{
	border-style: ridge ;
    width: 600px;
    height: 310px;
    padding: 10px;
	margin-left:200px;
    background-color: white;
}

.hesapbilgileri { 
    width:1500px;
    height: 300px;
}
.kişiselbilgiler { 
    width:1500px;
    height: 300px;
}
.bağışlar { 
    width:1500px;
    height: 300px;
}

.button1 {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  background-color: #4CAF50;
  margin-left:-1px;
  margin-top:-35px;
  margin-bottom:-30px;
  width:250px; 
  height:100px;

} 
.button2 {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  background-color: #008CBA;
  margin-top:-30px;
  margin-bottom:-30px;
  width:160px; 
  height:100px;
  } 
 .button3 {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  background-color: #4CAF50;
  margin-top:-5px;
  width:160px; 
  height:30px;
}
.button4 {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  background-color: #008CBA;
  margin-top:-5px;
  width:160px; 
  height:30px;
  } 
</style>


</head>

<body>
<div id="tamamı">

<div class="üstkısım">


<nav class="navbar navbar-default" style="height:70px">
<div class="container-fluid">
<ul class="nav navbar-nav" >
<li><a href="_uyesayfasi.php">Ana Sayfa</a></li>
<li><a href="hakkında.php">Hakkında</a></li>
<li ><a href="hakkımızda.php">Hakkımızda</a></li>
<li><a href="bağış.php">Bağış Yap</a></li>
<li class="active"><a href="hesabım.php">Hesabım</a></li>
<li><a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</a><li>
<li><a>Detaylı bilgi için:<font color="blue"><br/>0555 555 55 55</font></a><li>
<li><a>E-posta:<font color="blue"><br/>abaciyakup001@gmail.com</font></a><li>
<li><a href='_logout.php' ><button type="button" class="btn btn-default">Oturumu Kapat</button></a></li>
</ul>
</div>
</nav>

<!--
<div class="Anasayfa2"><a href="_uyesayfasi.php">Anasayfa</a></div>

<div class="kurban"><a href="hakkında.php">Kurban Hakkında</a></div>

<div class="hakkımızda"><a href="hakkımızda.php">Hakkımızda</a></div>

<div class="bağış"><a href="bağış.php">Bağış Yap</a></div>

<div class="hesabım"><a href="hesabım.php">Hesabım</a></div>

<div class="iletişim"><font color="blue">Detaylı bilgi için:</font><br/>0555 555 55 55<br/><br/><font color="blue">E-posta:</font><br/>abaciyakup001@gmail.com</div>

<div class="çıkış"><a href='_logout.php'>[Oturumu Kapat]</a></div>
-->
</div>
<div class="altkısım">

<div class="hesapbilgileri">
<form action="hesapdeğiştir.php" method="POST">
<table width="1200px" height="250px" style="margin-left:100px;margin-top:50px;border-collapse:collapse;" border="1">
<tr>
<td style="border-bottom: 1px solid #ddd; background-color: forestgreen; font-size:30px; width:14%; color:white;"rowspan="5"  align="center">Hesap Bilgileri</td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:14%;"align="center"> <p class="text-danger">Ad:</p></td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:14%;"align="center"><p class="text-danger">Soyad:</p></td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:14%;"align="center"><p class="text-danger">Telefon Numara:</p></td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px; width:30%;" align="center" ><p class="text-danger">E-Posta:</p></td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px; width:14%;"align="center" ><p class="text-danger">Sifre:</p></td>
</tr>

<tr>
<td style="border-bottom: 1px solid #ddd;"align="center"><input type="text" name="ad" style="width:100%; height:100% ; font-size:20px ;"  value="<?php echo $ad; ?>"></td>
<td style="border-bottom: 1px solid #ddd;"align="center"><input type="text" name="soyad" style="width:100%; height:100% ; font-size:20px;"  value="<?php echo $soyad; ?>"></td>
<td style="border-bottom: 1px solid #ddd;"align="center"><input type="text" name="telno" style="width:100%; height:100% ; font-size:20px ;"  value="<?php echo $telno; ?>"></td>
<td style="border-bottom: 1px solid #ddd;"align="center"><input type="text" name="eposta" style="width:100%; height:100% ; font-size:20px;"  value="<?php echo $eposta; ?>"></td>
<td style="border-bottom: 1px solid #ddd;"align="center"><input type="text" name="sifre" style="width:100%; height:100% ; font-size:20px; "  value="<?php echo $sifre; ?>"></td>
</tr>
</form>
<tr>
<td style="border-bottom: 1px solid #ddd;" colspan="5" align="center">
<button type="submit" class="btn btn-success">DEĞİŞİKLİKLERİ KAYDET</button>
<button type="submit" class="btn btn-primary" formaction="hesapsil.php">HESABI SİL</button>
<!--
<input class="button1" type="submit" value="DEĞİŞİKLİKLERİ KAYDET">
<input class="button2" formaction="hesapsil.php" type="submit" value="HESABI SİL"></td>-->
</tr>

</table>
<br/>
<hr></hr>
</div>


<div class="bağışlar">
<?php 


echo "<table width='800px' height='250px' style='margin-left:100px; border-collapse:collapse;' border='1'>";
echo "<tr>";
echo "<td style='border-bottom: 1px solid #ddd; background-color: forestgreen; font-size:20px ;width:14%; color:white;' rowspan='55'  align='center'>Bağışlarınız</td>";
//echo "<td style='border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px ;width:14%;'  align='center'>ID</td>";
echo "<td style='border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px ;width:30%;'  align='center'><p class='text-danger'>Fiyatı</p></td>";
echo "<td style='border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px ;width:14%;'  align='center'><p class='text-danger'>Türü</p></td>";
echo "<td style='border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px ;width:14%;'  align='center'><p class='text-danger'>Kesilecek Yeri</p></td>";
//echo "<td style='border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px ;width:14%;'  align='center'>Kaydı Sil</td>";
//echo "<td style='border-bottom: 1px solid #ddd; background-color: #f2f2f2; font-size:20px ;width:14%;'  align='center'>Kaydı Değiştir</td>";
/*<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:25%;"align="center">Fiyatı</td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:15%;"align="center">Türü</td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:15%;"align="center">Kesilecek Yeri</td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:15%;"align="center">Kaydı Sil</td>
<td style="border-bottom: 1px solid #ddd; background-color: #f2f2f2; width:15%;"align="center">Kaydı Değiştir</td>*/
//echo "</tr>";

//echo "<form action='değiştir.php' method='POST'>";
$sonuc3=mysqli_fetch_array($sorgu3,MYSQLI_ASSOC);
if($sonuc3==''){
		//echo "<table width='800px' height='100px' style='margin-left:100px; border-collapse:collapse;' border='1'>";
		echo "<tr>";
		echo "<td style='border-bottom: 1px solid #ddd; background-color: forestgreen; color:white;' colspan='55' align='center';>Yapılmış bir bağışınız bulunmamaktadır </td>";
		echo "</tr>";
	}
while( $sonuc2=mysqli_fetch_array($sorgu2,MYSQLI_ASSOC) ){
		
echo "<tr>";
//"<input type='text' name='sifre' style='width:100%; height:100% ; font-size:20px'  value='".$sonuc["bağıştürü"]."'>" . "</td>";
//echo "<td style='border-bottom: 1px solid #ddd;' align='center'><p>".$sonuc2["id"]."</p></td>";
echo "<td style='border-bottom: 1px solid #ddd;' align='center'>"."<p>" /*type='text' name='bağışfiyatı' style='width:100%; height:100% ; font-size:20px'  value='"*/.$sonuc2["bagisfiyati"]."</p></td>";
echo "<td style='border-bottom: 1px solid #ddd;' align='center'>"."<p>" /*type='text' name='bağıştürü' style='width:100%; height:100% ; font-size:20px'  value='"*/.$sonuc2["bagisturu"]."</p>" . "</td>";
echo "<td style='border-bottom: 1px solid #ddd;' align='center'w>"."<p>" /*type='text' name='gidecek_yer' style='width:100%; height:100% ; font-size:20px'  value='"*/.$sonuc2["gidecek_yer"]."</p>" . "</td>";
//echo "<td style='border-bottom: 1px solid #ddd;' align='center'>"."<p> class='button4' formaction='hesapsil.php' type='submit' value='BAĞIŞI SİL'>"."</td>";
//echo "<td style='border-bottom: 1px solid #ddd;' align='center'>"."<p> class='button3' type='submit' value='BAĞIŞI DEĞİŞTİR'>"."</td>";
echo "</tr>";

	}
?>



</form>
<!--
<tr>
<td style="border-bottom: 1px solid #ddd;" colspan="3" align="center"><button class="button1" type="button">DEĞİŞİKLİKLERİ KAYDET</button>
<button class="button2"  type="button">TEMİZLE</button></td>
</tr>
-->
</table>

</div>

</div>


</div>
</div>



<!-- padding: 20px 20px; border-left: 50px solid;-->
</body>

</html>
