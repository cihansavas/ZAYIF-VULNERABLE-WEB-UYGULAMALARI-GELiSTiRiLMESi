<?php 
@include("baglanti.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Anasayfa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include("linkler.php") ?>
<style>
 .label.label-primary:hover {
	cursor:pointer;
}

</style>
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
<a href="index.php" class="list-group-item active">Anasayfa</a>
  <a href="kurulum.php" class="list-group-item">Kurulum Dokumantasyonu</a>
  <a href="sql.php" class="list-group-item  ">Sql Enjeksiyonu</a>
    <a href="xss.php" class="list-group-item">XSS</a>
      <a href="komut.php" class="list-group-item ">Komut Enjeksiyonu</a>
</div>
    </div>

    <div class="col-sm-9">
      <h2>Zayıf Web Uygulaması Hakkında</h2>
         
 

  
    
      <p>Bu bir zayıf web güvenlik uygulamasıdır. Projede üç temel zaafiyet üzerinde durulmuş örnekler yapılmış ve zaafiyetler giderilmiştir.</p>
      <p>SQL Injection, XSS ve Command Injection işlenmiştir. Her zaafiyet için bir Yardım butonu eklenmiştir. İlgili yönergeye, zaafiyet hakkındaki tanımlara ve bilgilere bu yardım butonu üzerinden ulaşabilirsiniz.</p>
      <p>Ayrıca her zaafiyet sömürüldükten sonra giderilmeye çalışılmıştır. Zaafiyeti olmayan güvenliği arttırılmış sayfalara ulaşmak için ilgili uygulamanın yardım butonuna bastıktan sonra gelen ekranda zaafiyeti gider butonuna tıklayıp sömürü yapmaya çalışabilir ve sonuçları karşılaştırabilirsiniz.</p>
      <p>Proje Mehmet Samet YILDIZ ve Cihan SAVAŞ tarafından Yazılım Mühendisliği II - Proje III için php dili kullanılarak geliştirilmiştir.</p>
      <p>&nbsp; </p>
      <br><br>
       
          
      </div>
    </div>
  </div>
 

<footer class="container-fluid">
 <h4>Zayıf Web Uygulaması - Yazılım Laboratuarı II - Proje III</h4>
</footer>

</body>
</html>
