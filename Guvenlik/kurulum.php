<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kurulum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<?php include("linkler.php") ?>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<style>
.container-fluid .row.content .col-sm-9 img {
	height: 350px;
	width: 350px;
	-webkit-border-radius: 33px;
-webkit-border-top-left-radius: 2px;
-webkit-border-bottom-right-radius: 2px;
-moz-border-radius: 33px;
-moz-border-radius-topleft: 2px;
-moz-border-radius-bottomright: 2px;
border-radius: 33px;
border-top-left-radius: 2px;
border-bottom-right-radius: 2px;
border-color:#060;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
 
 
.container-fluid .row.content .col-sm-9 .yazilar {
	
	font-size:20px;
	
	
}
.container-fluid .row.content .col-sm-9 .container .row .col-md-8 {
	padding-top: 20px;
}
.container-fluid .row.content .col-sm-9 .container .row {
	margin-bottom: 25px;
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
  <a href="index.php" class="list-group-item">Anasayfa</a>
  <a href="kurulum.php" class="list-group-item active">Kurulum Dokumantasyonu</a>
  <a href="sql.php" class="list-group-item  ">Sql Enjeksiyonu</a>
    <a href="xss.php" class="list-group-item">XSS</a>
      <a href="komut.php" class="list-group-item ">Komut Enjeksiyonu</a>
</div>
    </div>

    <div class="col-sm-9">
      <h2>Kurulum Dokümantasyonu</h2>
       <p>Kurulum windows işletim sistemlerinden herhangi birinde çalışan ve wamp server kurularak rahatça gerçeklenebilir.</p>
       <p>Öncelikle wampserver ı bilgisayarımıza kurmamız gerekir. http://www.wampserver.com/en/ web sayfasından download sekmesi altında 
       Wampserver 3.0.6 32 bit x86 – Apache 2.4.23 – PHP 5.6.25/7.0.10 – MySQL 5.7.14 – PhpMyAdmin 4.6.4 – Adminer 4.2.5 – PhpSysInfo 3.2.5 genel bir paket indirilip bilgisayara kurulabilir.</p>
       <p>Böylece hem sunucu hemde phpmyadmin sistemimize kurulmuş oluyor...</p>
  			 <h3> 1)Wamp Server'in araç çubuğundan açılması</h3>
             <div class="container">
                <div class="row">
                    <div class="col-md-4"><img src="img/wamp1.png"></div><div class="col-md-8"><p class="yazilar">
                    Kurulum tamamlandıktan sonra wampserveri başlatın<br>
                    Araç çubuğunda wampserverin rengi yeşil olduktan sonra tüm servisler düzgün bir şekilde başlatılmış demektir. <br>
                    İlk olarak www klasörüne projenin kaynak kodlarını ekleyin.<br>
                    Daha sonra localhostu resimdeki gibi seçin.</p>
                    </div>
                </div>
            </div>
      
            
            <h3>2)Localhost (Yerel Sunucu)</h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><a href="img/wamp2.png" target="_self"><img src="img/wamp2.png"></a></div><div class="col-md-8"><p class="yazilar">
                    Localhostu açmayı başardık.<br>
                    Eğer daha önceden başka bir uygulama localhostu kullanıyorsa port ataması yapmanız gerekebilir,
                    <br>Bunun için Apache sekmesi altından gerekli tesleri yapmanız gerekir.<br>
                    Resimde görüldüğü gibi localhost:8080 portu benim uygulamamda çalışmakta.<br>Aynı zamanda herhangi bir tarayıcı üzerinden 127.0.0.1(:8080) yazdığınızda da localhost açılacaktır.</p></div>
                </div>
            </div>
            
            
         <h3>3) Php My Admin' giriş</h3>
         <div class="container">
                <div class="row">
                    <div class="col-md-4"><a href="img/wamp3.png" target="_parent"><img src="img/wamp3.png"></a></div><div class="col-md-8"><p class="yazilar">
                    PhpMyAdmin için ilk adımdaki ekranda localhost yerine phpMyAdmini seçmeniz gerekir.<br>
                    PhpMyAdmine tıkladığımızda karşımıza username ve password soran bir alan gelecektir.<br> Default olarak username:root  pasword ise null geçilir.
                    <br>Veri Tabanı Yönetim sistemini açmak için kullanıcı bilgilerini girdikten sonra git butonuna basın.<br>
                   </p></div>
                </div>
            </div>
 
          <h3>4)Veritabanı Oluşturma</h3>
          <div class="container">
                <div class="row">
                    <div class="col-md-4"><a href="img/wamp5.png" target="_parent"><img src="img/wamp5.png" style="height:200px;"></a> </div><div class="col-md-8"><p class="yazilar">
                    Veritabanı Yönetim Sistemine girmeyi başardık.<br>
                    Şimdi sol kısımda veritabanlarının olduğunu fark edebilirsiniz. En üstte Yeni'ye tıklayın.<br>
                    Projede veritabanı ismi "guvenlilk" olarak verilmiştir.<br> Sizde aynı ismi verirseniz bağlantı sayfalarında bir değişiklik yapmanıza gerek kalmayacaktır.
                    
                   </p></div>
                </div>
            </div>
          
      <h3>5) Verileri İçeri Aktarma</h3>
      <div class="container">
                <div class="row">
                    <div class="col-md-4"><a href="img/wamp6.png" target="_parent"><img src="img/wamp6.png" style="height:200px;"></a> <a href="img/wamp7.png" target="_parent"><img src="img/wamp7.png"></a><br></div><div class="col-md-8"><p class="yazilar">
                    Veritabanını oluşturduk.<br>
                    Şimdi ekte vermiş olduğumuz .sql formatındaki dosyayı içeri aktararak veritabanı tablolarını veritabanına ekleyebilirsiniz.<br>
                    Bunun için veritabanını seçtikten sonra üstmenüde içeri aktar sekmesine tıklayın.<br>
                    Ardından gözat butonuna tıklayarak bilgisayarınızdan ekte verilmiş olan .sql formatındaki dosyayı seçiniz.<br>
                    Son olarak altta bulunan git butonuna basın, tüm tabloların veritabanına eklendiğini görebilirsiniz.
                    
                   </p></div>
                </div>
            </div>
        
    
 


 
   </div>
      
</div>
</div>
 

<footer class="container-fluid">
 <h4>Zayıf Web Uygulaması - Yazılım Laboratuarı II - Proje III</h4>
</footer>

</body>
</html>
