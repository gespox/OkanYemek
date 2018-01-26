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

<div class="tab">
  <button class="tablinks" onclick="iletisim(event, 'adres')" id="defaultOpen">Adres</button>
  <button class="tablinks" onclick="iletisim(event, 'telefon')">Telefon</button>
  <button class="tablinks" onclick="iletisim(event, 'ogrenci')">Ögrenci</button>  
</div>

<div id="adres" class="tabcontent">
  <h3>Adres</h3>
  <p>Çarşıbaşı Mah. Hikmet Işık Cad. Bahçe Apt. Altı No:30.</p>
</div>

<div id="telefon" class="tabcontent">
  <h3>Telefon</h3>
  <p>03264841574</p> 
</div>
<div id="ogrenci" class="tabcontent">
  <h3>Öğrenci</h3>
  <p>Mehmet Sait Okan - 2015123114 .</p> 
</div>

<script>
function iletisim(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</div>
</div>
<div id="temizle"></div>

<div id="alt">
<p class="yazi">Okan Yemek - Mühendislik Projesi, Mehmet Sait Okan</p>
</div>

</div>

</body>

</html>
