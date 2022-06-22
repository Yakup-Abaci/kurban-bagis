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
    height: 1400px;
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
<li class="active"><a href="hakkımızda.php">Hakkımızda</a></li>
<li><a href="bağış.php">Bağış Yap</a></li>
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
<h1 class="text-warning"><b>BİZ KİMİZ?</b></h1>
<img src="yardım.jpg" border="1" hspace="20" width="400" height="400" alt="Kurban" align="right"/>

<font size="5" face="block" >
<p class="text-success">
Dünyanın dört bir yanındaki yardım bekleyen zor durumda olan aileler, afetzedeler , yaşlılar, savaş mağduru
olan tüm insanlara yardımlarınızı götürüyoruz.
</p>
</font>
<br /><br /><br />
<h1 class="text-warning"><b>YURT İÇİ BAĞIŞLARDA İHTİYAÇ SAHİPLERİ NASIL BELİRLENİYOR</b></h1>
<font size="5" face="block" >
<p class="text-success">
İlk önceliğimiz ülkemizdeki mülteci kampları , afetzedeler , savaş mağdurları , yetim yurtları , yetim aileler , yaşlı ve tek başına yaşayan insanlar ,
kimsesizlerdir.</p>
</font>
<br /><br /><br /><br /><br /><br />
<img src="kurban7.jpg" border="1" hspace="20" width="600" height="300" alt="Kurban" align="left"/>

<h1 class="text-warning">YURT DIŞI VERİLEN KURBANLARINIZ NERELERE GİDECEK</h1>
<font size="5" face="block" ><p class="text-success">
Bağışladığınız kurbanlarınız çoğunluğu Afrika kıtasında Benin , Burundi , Çad , Cibuti , Esvatini , Etyopya , Gine , Güney Afrika Cum,
Kamerun , Kenya , Malavi , Mali , Moritanya , Mozambik , Nijer , Sierra Leone,  Sudan , Somali , Tanzanya , Togo , Uganda , Zimbabve ,
 Filistin, Lübnan , Mısır , Ürdün , Yemen , Arnavutluk , Kosova , Bosna hersek ,
Karadağ , Macaristan , Afganistan ve diğer yardıma muhtaç tüm insanlara ulaşacaktır.</p>
</font>
<br /><br /><br />
<h1 class="text-warning">KURBANLARINIZ NEREDE KESİLMEKTEDİR</h1>
<font size="5" face="block" ><p class="text-success">
Kurbanlarımız Yurt içine ve yurt dışına verilenler kesim yerlerimizde kesilir ve şoklanarak bağışlayanaın istediği yere iletilir.</p>
</font>
<br /><br /><br /><br /><br /><br />



</div>


</div>
</div>



<!-- padding: 20px 20px; border-left: 50px solid;-->
</body>


</html>