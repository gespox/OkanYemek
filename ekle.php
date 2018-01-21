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
<table cellspacing="20" cellpadding="20">

    <tr>
    <td>Seri No:</td>
    <td><input type="text1" name="seri" /></td>
    
    <td>Kitap Adı:</td>
    <td><input type="text1" name="ad" /></td>
    </tr>
    
    <tr>
    
    <td>Kitabın Yazarı:</td>
    <td><input type="text1" name="yazar" /></td>
    
    <td>Türü:</td>
    <td><input type="text1" name="tur" /></td>
    </tr>
    
    <tr>
    <td>Basım Yılı:</td>
    <td><input type="text1" name="yil" /></td>
    <td>Yayın Evi</td>
    <td><input type="text1" name="yayin" /></td>
    </tr>
    <tr>
    </tr>
    <tr>
    <td></td>
    <td></td>
    <td></td>
     <tr>
    </tr>
    <td><input type="submit" value="Kitap Ekle" /></td>
    </tr>
    
    </table>
</form>
</div>

<?php 
        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $seri      =    $_POST["seri"];
            $ad    =    $_POST["ad"];
            $yazar    =    $_POST["yazar"];
			$tur    =    $_POST["tur"];
			$yil    =    $_POST["yil"];
			$yayin    =    $_POST["yayin"];
			
            // Veritabanına Ekleyelim.
            $ekle        =    mysqli_query($baglan,"insert into bilgiler (seri_no,kitap_adi,yazar,turu,basim_yili,yayin_evi) values ('$seri','$ad','$yazar','$tur','$yil','$yayin')");
            
            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if($ekle){
                echo "Başarılı Bir Şekilde Eklendi !";
            }else{
                echo "Bir Sorun Oluştu";
            }
        }
    ?>



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