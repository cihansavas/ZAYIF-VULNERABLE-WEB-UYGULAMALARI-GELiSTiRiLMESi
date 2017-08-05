<!DOCTYPE html>
<html lang="en">
<head>
  <title>XSS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/stil.css">
  

    <?php
 session_start();
 ob_start();
  
		if(!($_SESSION['id']&&$_SESSION['isim']))
		{
			header("Location:oturum.php");
		}	
  ?>

 

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
  <a href="sql.php" class="list-group-item  ">Sql Enjeksiyonu</a>
    <a href="xss.php" class="list-group-item active">XSS</a>
      <a href="komut.php" class="list-group-item ">Komut Enjeksiyonu</a>
  
</div>
    </div>

    <div class="col-sm-9">
      <h2>XSS</h2>
       <h5><span class="label label-primary" data-toggle="modal" data-target="#myModal">Yardım!</span>
       <a class="label label-danger" href="cikis.php">Oturumu kapat</a> </h5><br>
      
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Zafiyetin Sömürülmesi Hakkında Bilgi</h4>
        </div>
        <div class="modal-body">
        <h5><a class="label label-success" href="xssafe.php">Zaafiyeti Gider</a></h5><br>
          <p><b>XSS zaafiyeti</b> kullanıcının veya sayfa yöneticisinin tarayıcısında scriptler çalıştırmak, sahte html inputlarıyla veri çalmak veya iframe oluşturularak verilerin farklı yerlere girilmesini sağlamak amacıyla sömürülebilir.</p>
          <p>Biz bu projede <strong>Stored XSS</strong> veya diğer adıyla <strong>Persistent XSS</strong> i sömürerek uygulama yapmayı hedefledik.</p>
          <p><strong>XSS </strong>sayfasına girdiğiniz anda eğer sistemde açık bir kullanıcı yoksa<strong> Kullanıcı Giriş </strong>sayfasına yönledirileceksiniz.</p>
          <p>Kayıt ol a bastığınızda çıkan ekranda kullanıcı adı kısmına basit bir script yazıp zaafiyetin var olup olmadığını test edebilirsiniz</p>
                <p>Bunun için <code> <strong>&lt;script>alert("zayıf");&lt;/script&gt;</strong></code> yazarak basit bir scriptin çalıştırılıp çalıştırılmadığını görebilirsiniz.</p>
                <p>Bu çok basit bir script ve sistemde çalıştırılabiliyor. Daha büyük düşünecek olursak kullanıcı adımızın istediğimiz urlye yönlendirme yapan bir script olduğunu ve bu url de session bilgilerinin alındığını hayal edelim. Sayfa yöneticisi admin paneline girip kullanıcıları görüntülemek istediği zaman bizim kullanıcı adımız onun session bilgilerini bize gönderecektir. Böylece artık bizde süper admin gibi davranabiliriz. Bu çok büyük bir açık...</p>
                  <p>Veya bir ziyaretçi defteri olduğunu varsayalım kullanıcılar oturum açıp ziyaretçi defterine yorum yapsın ve herkes yorumları görüntülesin. Bizde bu zaafiyeti barındıran sisteme yine istediğimiz scripti oluşturup session bilgilerini kendi sunucumuzda bir log dosyasına kayıt edelim. Böylece sisteme giren her kullanıcının oturum bilgisine ulaşmış olacağız.</p>
              <p>Kodumuza baktığımız zaman <pre><?php $code ='<?php <p>Merhaba <b> echo  $_SESSION[\'isim\']; ?></b> </p>'; highlight_string($code);?></pre> Session dan gelen isim hiç filtre olmaksızın direkt olarak sayfamıza html kodlarının arasına gömülüyor.</p>
                  <p>Bu zaafiyeti gidermek için bu gibi kısımlara filtre uygulamalıyız.</p>
                  <p>Bu zaafiyeti giderirken de çok dikkatli olmalıyız Mesela whitelist oluşturmak istersek <font color="#FF0000">   <?php $code ='<script>'; highlight_string($code); ?> </font>tagini whiteliste eklemek yeterli olmayabilir casus bunu<font color="#FF0000">  <?php $code ='<sCriPt>'; highlight_string($code); ?> </font>yazarak çalıştırısa browser bunuda script olarak yorumlayabilir böylece casus yine başarılı olabilir. </p>
                  <p>Çözüm olarak <pre><font color="#FF0000">  <?php $code =' <p>Merhaba <b><?php echo htmlspecialchars($_SESSION[\'isim\']);?></b> </p>'; highlight_string($code); ?> </font> </pre>kullanımını tavsiye edebiliriz.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat!</button>
        </div>
      </div>
      
    </div>
  </div>
    
 <p>Merhaba <b><?php echo  $_SESSION['isim'] ;?></b> </p>

                                
                                
                                
							</div>
						</div>
					</div>
				</div>
			</div>
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
