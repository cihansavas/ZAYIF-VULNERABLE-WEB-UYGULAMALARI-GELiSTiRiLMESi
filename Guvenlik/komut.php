<!DOCTYPE html>
<html lang="en">
<head>
  <title>Komut Enjeksiyonu</title>
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
  <a href="sql.php" class="list-group-item  ">Sql Enjeksiyonu</a>
    <a href="xss.php" class="list-group-item">XSS</a>
      <a href="komut.php" class="list-group-item active">Komut Enjeksiyonu</a>
</div>
    </div>

    <div class="col-sm-9">
      <h2>Komut Enjeksiyonu</h2>
       <h5><span class="label label-primary" data-toggle="modal" data-target="#myModal">Yardım!</span></h5><br>
 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Zafiyetin Sömürülmesi Hakkında Bilgi</h4>
          
        </div>
        <div class="modal-body"> <h5><a class="label label-success" href="komutsafe.php">Zaafiyeti Gider</a></h5><br>
          <p><strong>Komut Enjeksiyonu,</strong> Sunucunun işletim sistemini hedef alan bir zaafiyet sömürü yöntemidir.</p>
          <p>Tıpkı diğer zaafiyetlerde olduğu gibi kullanıcıya sunulan input üzerinden alınan verinin <strong>filtrelenmeden</strong> kullanılmasıyla oluşur.</p>
          <p>Eğer kullanıcının Ip adresini alan ve geriye bilgi döndüren bir uygulamaya sahipseniz. Bunun kontrolünü çok dikkatli yapmalısınız. Sunucuda koşturulan bir <strong>shell</strong> bizim için çok tehlikeli boyutlara ulaşabilir.</p>
          <p>
          Saldırgan aşağıdaki input a <strong>&&</strong> karakterleriyle araya girip <code>ipconfig</code> yazıp bizim bir çok bilgimize ulaşabilir. Casusun yapabilecekleri sadece işletim sisteminde komut yazma kabiliyetiyle sınırlıdı. Sunucuyu kilitleyebilir, kendisini kullanıcı olarak ekleyebilir ki bu zaafiyetler oldukça büyük ve tehlikeli zaafiyetlerdir.</p>
          <p><code>http://localhost:8080/guvenlik/komut.php?Komut=127.0.0.1+%26%26+ipconfig&calistir=%C3%87al%C4%B1%C5%9Ft%C4%B1r</code> </p><p>Yazarak sizde zaafiyeti test edebilirsiniz.</p>
          <p>Zaafiyetin sebebi yukarıdada belirttiğimiz gibi verinin filtrelenmemesiydi şimdi kullanılan koda bir bakalım</p>
          <pre><?php $code='<?php
		  if(@$_POST["calistir"])
		  {
			   $komut=$_POST[\'Komut\'];
			   $sonuc=shell_exec(\'ping \'. $komut);
			   echo "<pre>{$sonuc}</pre>";
          }
		  ?>'; highlight_string($code);?> </pre> 
          <p>Görüldüğü üzere sayfa post edildiği anda (calistir butonuna basılınca) komut inputunun içerisinde bulunan değer <code>$komut</code> değişkenine alınıyor ve doğrudan <code>shell_exec</code> ile beraber kullanılıyor zaafiyetin sebebi tam olarak burası eğer filtre kullanılsaydı<code> && </code>yazılıp başka bir kod eklenemezdi</p>
          <p>Filtre Kullanımı </p>
          <p>
            <pre><?php $code='<?php
		  if(@$_POST["calistir"])
		  {
		 	$komut=$_POST[\'Komut\']; 
		  	$sonuc = trim($komut); 
		    // Kara Liste Oluşturuyor 
		  $karaliste = array( 
			  \'&\'  => \'\', 
			  \';\'  => \'\', 
			  \'| \' => \'\', 
			  \'-\'  => \'\', 
			  \'$\'  => \'\', 
			  \'(\'  => \'\', 
			  \')\'  => \'\', 
			  \'`\'  => \'\', 
			  \'||\' => \'\', 
		  );  
		  // Karalistede belirtilen karakterler siliniyor 
		  $sonuc = str_replace( array_keys( $karaliste ), $karaliste, $sonuc );
		  //filtrelenen komut şimdi koşturuluyor...
		  $sonuc=shell_exec(\'ping \'. $sonuc);
		  echo "<pre>{$sonuc}</pre>";
          }
		  ?>'; highlight_string($code);?> </pre> 
          
          
          </p>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Kapat!</button>
        </div>
      </div>
      
    </div>
  </div>
    
    <form class="form-horizontal"    method="GET" action="<?php $_SERVER['PHP_SELF'];?>" >
    <div class="form-group">
      <label class="control-label col-sm-2" for="Ip">Ip:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Komut" placeholder="Komut" name="Komut">
      </div>
  <br><br>
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="calistir" id="calistir" class="btn btn-default" value="Çalıştır">
      </div>
    </div>
  </form>
  
		   <?php if(@$_GET["calistir"]){
          $komut=$_GET['Komut'];
         $sonuc=shell_exec('ping '. $komut);
          echo "<pre>{$sonuc}</pre>";
               }?>
          
      </div>
    </div>
  </div>
 

<footer class="container-fluid">
 <h4>Zayıf Web Uygulaması - Yazılım Laboratuarı II - Proje III</h4>
</footer>

</body>
</html>
