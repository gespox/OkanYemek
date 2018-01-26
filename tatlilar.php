<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Okan Yemek</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/tab.css" />
<link rel="stylesheet" type="text/css" href="css/form.css" />
<link rel="stylesheet" type="text/css" href="css/buton.css" />
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
</head>

<body background="img/arkaplan.jpg">

<?php

@$baglanti = new mysqli('localhost', 'root', '', 'yemekliste'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo mysqli_connect_error();
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

?>

<div id="genel">
<div id="header">
<div id="banner"><a href="index.php"><img src="img/logo.png" width="100%" height="100%" /></a></div>
</div>
<div id="menu">

<ul id="menu">

<li><a href="index.php">Ana Sayfa</a></li>

<li><a href="yemekler.php">Yemekler</a></li>

<li><a href="tatlilar.php">Tatlılar</a></li>

<li><a href="icecek.php">İçecekler</a></li>

<li><a href="iletisim.php">İletişim</a></li>
</ul>
</div>

<div id="orta">

<div id="ortasag">

<center>
<br />
<div class="center-wrap">
	<div class="button">
		<a href="tatliekle.php">Tatlı Ekle<span class="shift">›</span></a>
		<div class="mask"></div>
	</div>
</div>	
<br />
<div class="center-wrap">
	<div class="button">
		<a href="tatligetir.php">Tatlı Getir<span class="shift">›</span></a>
		<div class="mask"></div>
	</div>
</div>	
<br />
<div class="center-wrap">
<div class="button">
		<a href="tatlisil.php">	Tatlı Sil<span class="shift">›</span></a>
		<div class="mask"></div>
	</div>
</div>	
<br />
<div class="center-wrap">
<div class="button">
		<a href="tatliguncelle.php">Tatlı Güncelle<span class="shift">›</span></a>
		<div class="mask"></div>
	</div>
</div>	
<br />
</center>
</div>
</div>
<div id="temizle"></div>

<div id="alt">
<p class="yazi">Okan Yemek - Mühendislik Projesi, Mehmet Sait Okan</p>
</div>

</div>

</body>

</html>
