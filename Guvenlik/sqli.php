
<?php 
@include("baglanti.php"); 
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Sql Enjeksiyonu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<?php include("linkler.php") ?>
</head>
<body>
<div class="jumbotron">Hoş geldiniz
<div class="jumbo-icerik">
<img src="img/koub.png" width="140" height="140" ></div>

</div>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
    
      <div class="list-group">
<a href="index.php" class="list-group-item">Anasayfa</a>
  <a href="kurulum.php" class="list-group-item">Kurulum Dokumantasyonu</a>
  <a href="sql.php" class="list-group-item active ">Sql Enjeksiyonu</a>
    <a href="xss.php" class="list-group-item">XSS</a>
      <a href="komut.php" class="list-group-item ">Komut Enjeksiyonu</a>
</div>
    </div>

    <div class="col-sm-9">
      <h2>SQL Enjeksiyonu</h2>
       <h5><span class="label label-primary" data-toggle="modal" data-target="#myModal">Yardım!</span></h5><br>
       <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3 class="modal-title">Sql Enjeksiyonunun Sömürülmesi Hakkında Bilgi</h3>
        </div>
        <div class="modal-body">  <h5><a class="label label-success" href="sqli.php">Zaafiyeti Gider</a></h5><br>
          <p>
          <b>SQL Enjeksiyonu,</b> adından da anlaşılabileceği gibi sql komutlarının arasına bir kaç kod serpiştirilerek (enjekte edilerek) yapılan bir sömürü biçimidir.
          Bu zaafiyetten yararlanmak için <b>' -- #</b> gibi yorum satırı ve tırnak karakterleri kullanılabilir.
          </p>
          <p>
          Örneğimize döndüğümüzde bize iki adet textbox verilmiş eğer biz burada sorgunun <font color="#FF0000"> <b>true</b> </font> dönmesini sağlarsak veritabanındaki kullanıcıların bilgilerine hiç öğrenci numarası ve öbs şifresi bilmeden ulaşabiliriz.</p>
          <p>Bunun için örnek olarak textbox ın içerisine <b>' or 1=1 # </b> yazalım.</p>
          <code><a href="http://localhost:8080/guvenlik/sqli.php?ogrNu=%27or+1%3D1%23&sifre=&BTN=Sorguyu+g%C3%B6nder#&sifre=&BTN=Sorguyu+g%C3%B6nder">http://localhost:8080/guvenlik/sqli.php?ogrNu=%27or+1%3D1%23&sifre=&BTN=Sorguyu+g%C3%B6nder#&sifre=&BTN=Sorguyu+g%C3%B6nder</a></code>
          <p>m' tan sonra kodun ilk kısmı yazılıp devamına or 1=1 yazdık. 1=1 her zaman true döneceğinden sorgusuz sualsiz bize verileri getirecektir.
          <br>
          <p>Aşağıdaki ekran görüntüsünde görüldüğü üzere<font color="#0000CC"> $_GET </font>ile textbox'tan alınan veriler filtre uygulanmaksızın doğrudan sql cümlesinde kullanılmaktadır. Bu yüzden tırnak atarak sql injection ile zaafiyet sömürülebilir hale gelmiştir. Bunun çözümü olarak ise <b>PDO</b> kullanımı ,  <b>mysqli</b> veya <b>encoding </b>tavsiye edilebilir. </p>
          <img src="img/sqlEnjeksiyonu.png" width="560" height="180">
          
          <p> 
          Aşağıdaki koddaki gibi mysqli kullanılarak bu zaafiyet giderilmiştir.
                 
          
		   <?php
		   $code=' 
	if ($stmt = $mysqli->prepare("Select OgrNu,AdSoyad,Puan FROM yazlabnotlar WHERE OgrNu= ? and ObsSifre=? ")) {
	  $stmt->bind_param("ss", $nu , $parola);
	  $stmt->execute(); 
    $stmt->bind_result($col1, $col2,$col3); 
    while ($stmt->fetch()) {
     ?>
	<table class="table table-bordered">
<tr><th width="300">Öğrenci Numarası</th><th width="300"> Ad Soyad </th><th> Aldığı Puan</th></tr>
<tr><td><?php echo $col1; ?></td><td> <?php  echo  $col2; ?> </td><td>  <?php  echo  $col3 ;?></td></tr></table>
	 <?php
    } $stmt->close();
} 
$mysqli->close();
} ';?>
<pre>
<?php highlight_string($code);?>
	</pre>
           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat!</button>
        </div>
      </div>
      
    </div>
  </div>
 
<p>Okul Numarası ve Öbs Şifresi girildiği takdirde öğrencinin projeden aldığı notun ekrana yazdırıldığını varsayalım.</p>
<p>Bunun için 2 tane textbox ile öğrenciden giriş yapması aşağıda istenmiştir. Bakalım hiç öbs şifresini bilmeden tüm öğrencilerin notlarına ulaşabilecek miyiz?..</p>
  <form action="<?php $_SERVER['PHP_SELF'];?>" method="GET">
       <table class="table ">
       <tr><td>Öğrenci Numarası:</td><td><input type="text" name="ogrNu"></td></tr>
       <tr><td>Şifre:</td><td><input type="password" name="sifre"></td></tr>
       <tr><td colspan="2"> <input type="submit" name="BTN" class="btn btn-success"></td></tr>
       
       </table>
          </form>
          <?php
          if(@$_GET['BTN'])
{
	$nu= $_GET['ogrNu'];
$parola=$_GET['sifre'];
	
 
$nu=urlencode($nu);
$parola=urlencode($parola);
 

$mysqli = new mysqli("localhost", "root", "", "guvenlilk");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* prepare statement */
if ($stmt = $mysqli->prepare("Select OgrNu,AdSoyad,Puan FROM yazlabnotlar WHERE OgrNu= ? and ObsSifre=? ")) {
	
	  $stmt->bind_param("ss", $nu , $parola);
	
    $stmt->execute();

    /* bind variables to prepared statement */
    $stmt->bind_result($col1, $col2,$col3);

    /* fetch values */
    while ($stmt->fetch()) {
     ?>
	<table class="table table-bordered">
<tr><th width="300">Öğrenci Numarası</th><th width="300"> Ad Soyad </th><th> Aldığı Puan</th></tr>
<tr><td><?php echo $col1; ?></td><td> <?php  echo  $col2; ?> </td><td>  <?php  echo  $col3 ;?></td></tr></table>
	 <?php
    }

    /* close statement */
    $stmt->close();
}
/* close connection */
$mysqli->close();
}
?>
	
	


 
 
      </div>
    </div>
  </div>
 

<footer class="container-fluid">
 <h4>Zayıf Web Uygulaması - Yazılım Laboratuarı II - Proje III</h4>
</footer>

</body>
</html>
