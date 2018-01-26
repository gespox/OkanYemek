<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Okan Yemek</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/tab.css" />
<link rel="stylesheet" type="text/css" href="css/form.css" />
<link rel="stylesheet" type="text/css" href="css/buton.css" />
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
   <div class="form">
<h1>İçecek Güncelleme</h1>
<form action="" method="post">

<input type="text" name="icecek_adi" placeholder="Güncellenecek İçeceğin Adı" />
<input type="text" name="icecek_fiyati" placeholder="İçeceğin Yeni Fiyatı" />
<input type="submit" value="Güncelle" />
</form>
</div>
<center>
<?php 
        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $icecek_adi      =    $_POST["icecek_adi"];
            $icecek_fiyati   =    $_POST["icecek_fiyati"];
           
            // Veritabanına Ekleyelim.
            $guncelle        =    mysqli_query($baglanti,"update icecek set icecek_fiyati='$icecek_fiyati' 
			where icecek_adi='$icecek_adi'");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($guncelle){
                echo "Başarılı Bir Şekilde Güncellendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
    ?>
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
