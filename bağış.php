<?php
//oturumu başlat
session_start();
//eğer username adlı oturum değişkeni yok ise
//login sayfasına yönlendir
if ( !isset($_SESSION['ad']) ) {
header("Location: index.php");
exit();
}
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
	display: flex;
    width: 100%;
    height: 100%;
    padding: 10px;
    background-color: white;
}
.anasayfa { 
	border-style: ridge ;
    width: 1200px;
    height: 800px;
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
    height: 400px;
    padding: 10px;
	margin-left:200px;
    background-color: white;
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
<li class="active"><a href="bağış.php">Bağış Yap</a></li>
<li><a href="hesabım.php">Hesabım</a></li>
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

<div class="anasayfa">
<p>
<h1 class="text-danger"><b>NASIL KURBAN BAĞIŞ YAPABİLİRİM?</b></h1>
<font size="5" face="block" >
<p class="text-muted">
İnternet sayfamız üzerinden gerekli olan tüm bilgileri girmeniz ve sizlere geri döndüğümüzde bizlere vekalet vermeniz bizler için yeterlidir. 
Bağışlarınızı internet sitesi yerine bizleri de arayarakta verebilirsiniz veyahut kesim şubelerimizde bulunan personellerimiz ile detaylı görüşüp
onlar vasıtası ile de verebilirsiniz.
Öncelikle Ad , Soyad , Telefon numarasını , yapmak istediğiniz bağış türünü seçiniz</p>
</font>
<br /><br /><br />
<div class="kayıtalma">
<form action="kayit.php" method="POST">
<table class="table table-striped">
<tr>
<tr>
<td><font size="5" face="block" ><p class="text-warning">Fiyatlardan birini seçiniz*:</p></font></td>
<td>
<select name="bagisfiyati" class="form-select" aria-label="Default select example">
  <option value="1000-2000">1000-2000</option>
	<option value="2000-3000">2000-3000</option>
	<option value="3000-4000">3000-4000</option>
	<option value="4000-5000">4000-5000</option>
	<option value="5000-6000">5000-6000</option>
	<option value="6000-7000">6000-7000</option>
	<option value="7000-8000">7000-8000</option>
	<option value="8000-9000">8000-9000</option>
	<option value="9000-10000">9000-10000</option>
</select>
	<!--
	<option value="1000-2000">1000-2000</option>
	<option value="2000-3000">2000-3000</option>
	<option value="3000-4000">3000-4000</option>
	<option value="4000-5000">4000-5000</option>
	<option value="5000-6000">5000-6000</option>
	<option value="6000-7000">6000-7000</option>
	<option value="7000-8000">7000-8000</option>
	<option value="8000-9000">8000-9000</option>
	<option value="9000-10000">9000-10000</option>
</select>
<
-->
</td>
</tr>


<tr>
<td><font size="5" face="block" >Yapmak istediğiniz bağış türünü seçiniz</font><span style="color:red;">*</span>:</td>
<td>
<select name="bagistürü" class="form-select" aria-label="Default select example">
	<option value="yurtici">Yurt içi</option>
	<option value="yurtdisi">Yurt dışı</option>
	<option value="adak">Adak</option>
	<option value="Akika">Akika</option>
</select>
</td>
</tr>

<tr>
<td><font size="5" face="block" >Kurbanınızın gitmesini istediğiniz özel yer</font>:</td>
<td>
<div class="input-group input-group-lg">
  <input type="text" id="kurbanyeri" name="kurbanyeri" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<!--<input type="text" id="kurbanyeri" name="kurbanyeri" style='height: 60px;'>-->
<br />
</td>
</tr>

</table>
<br /><br />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="submit" value="GÖNDER"> &emsp;
<input type="reset" value ="SIFIRLA">
<!--<button type="submit" class="btn btn-default">GÖNDER</button>
<button type="reset" class="btn btn-default">SIFIRLA</button>
<input type="submit" value="GÖNDER"> &emsp;
<input type="reset" value ="SIFIRLA">-->
</form>
</div>
</p>

</div>


</div>


</div>



<!-- padding: 20px 20px; border-left: 50px solid;-->
</body>


</html>