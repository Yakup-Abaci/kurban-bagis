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
    height: 1300px;
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
<li class="active"><a href="hakkında.php">Hakkında</a></li>
<li><a href="hakkımızda.php">Hakkımızda</a></li>
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
<h1 class="text-danger"><b>KURBAN NEDİR?</b></h1>
<img src="kurbanlar.jpg" class="img-rounded" hspace="20" border="2" width="600" height="300" alt="Kurban" align="right"/>
<font size="5" face="block" >
<p class="text-primary">
Zilhicce ayının onuncu, on birinci, on ikinci günleri ile on birinci on ikinci gecelerinde ibadet ve Allah'a 
yakınlık niyeti ile kesilen beş nevi hayvana[koyun, keçi, sığır, deve, manda] kurban denir.
</p>
</font>
<br /><br /><br /><br />
<h1 class="text-danger"><b>KURBANIN HÜKÜMLERİ NELERDİR?</b></h1>
<font size="5" face="block" >
<p class="text-primary">
Kurban kesmek fitre vacip olacak şekilde derecede zengin olan hür ve mukim erkek ve kadın mülümana kurbun kesmek vaciptir. 
Zira hadis-i şerifte:"Bir kimse, kurban kesmeye kudreti olur da kurban kesmezse o kimse
elbette bizim meclisimize(yani bize) yaklaşmasın.". Diğer hadis-i şerifte "Şefaatımıza nail olmaz" buyurulmuştur.
Kurban ancak kurban olmaya uygun hayvanı kesmekle eda edilir.
</p>
</font>
<br /><br /><br /><br />
<h1 class="text-danger"><b>HANGİ HAYVANLAR KURBAN EDİLİR?</b></h1>
<font size="5" face="block" >
<p class="text-primary">
Kurbana mahsus olan hayvanlar; koyun, keçi, sığır, manda ve devedir. Koyun ve keçi 1 yaşında, sığır ve manda 2 yaşında 
deve 5 yaşında kurban olunur. Lakin kuzu büyük olup bir senelik koyundan fark olunmazsa 6 ayı tamam edince kurban olur.
<ol>
<li class="text-primary">Kurban vahşi olmamalıdır.</li>
<li class="text-primary">Koyun ve keçi hisse kabul etmez. Yani bir koyun veya bir keçi bir kimse için kurban olur.</li>
<li class="text-primary">Bir sığır , bir manda , bir deve 7 kimse için kurban olur.Yani yedi kimse toplu olarak bir sığırı veya deveyi kurban edebilirler. Ortaklar tek, çift
veya yediden az olabilir.</li>
<li class="text-primary">Toplu olarak inek, öküz , deve veya manda kurban etmekte müstehab olan, ortakların kurbanı hepsinin birlikte almaları
veyahut içlerinden birine vekalet verip aldırmalarıdır.</li>
</ol>
</p>
</font>


<h1 class="text-danger"><b>VEKALET NASIL VERİLİR?</b></h1>
<font size="5" face="block" >
<p class="text-primary">
Kurbanı kesecek kişiye "Kurbanımı almaya-aldırmaya,kesmeye-kestirmeye ve hisselendirmeye sizi vekil tayin ettim." söylenmesi yeterlidir.
</p>
</font>

</div>


</div>
</div>



<!-- padding: 20px 20px; border-left: 50px solid;-->
</body>


</html>