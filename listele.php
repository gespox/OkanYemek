<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mühendislik Projesi</title>
<link href="main.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>

<div class="main">

<div class="header"> 
<img src="banner.jpg" width="100%" height="100%" />
</div>

<div class="icerik">

<?php
	$user="root";
	$pass="";
	$host="localhost";
	$db="kutuphane";
	$baglan=mysqli_connect($host,$user,$pass);
	mysqli_select_db($baglan,'kutuphane');
?>

<div class="menu">
<form action="" method="post">
<table cellspacing="5" cellpadding="5">
    <tr>
    <td>Seri No:</td>
    <td><input type="text1" name="seri" /></td>
    <td><input type="submit" value="Kitap Listele" /></td>
    </tr>
    </table>
</form>


<?php 
        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){			
            $listele        =    mysqli_query($baglan,"select * from bilgiler ");
		while($cekilen_veri=mysqli_fetch_array($listele)){
			extract($cekilen_veri);
			echo $seri_no."  ".$kitap_adi."  ".$yazar."  ".$turu."  ".$basim_yili."  ".$yayin_evi."</br>";
			
			
			
        }
		}
?>

</div>

<div class="giris">
<div class="vertical-menu">
  <a href="ekle.php" class="active">Kitap Ekle</a>
  <a href="guncelle.php">Kitap Güncelle</a>
  <a href="sil.php">Kitap Kaldır</a>
  <a href="listele.php">Kitap Listele</a>
</div>

</div>
</div>





<div class="footer"> <br /><br />Bu Site Duygu Karakavuk Tarafından Yapılmıştır... &copy;2018</div>
</div>

</body>
</html>