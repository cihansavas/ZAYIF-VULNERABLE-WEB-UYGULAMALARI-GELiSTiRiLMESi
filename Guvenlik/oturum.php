<!DOCTYPE html>
<html lang="en">
<head>
  <title>oturum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <?php include("linkler.php");
 session_start();
 ob_start();
  
 
  ?>
 <script type="text/javascript">
 $(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

 
 </script>
 
 <style>
 .container {
    width: 80%;
}
 .col-md-offset-3 {
     margin-left: 5%;
}
 .panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}
textarea {
    resize: none;
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
  <a href="kurulum.php" class="list-group-item">Kurulum Dokumantasyonu</a>
  <a href="sql.php" class="list-group-item  ">Sql Enjeksiyonu</a>
    <a href="xss.php" class="list-group-item active">XSS</a>
      <a href="komut.php" class="list-group-item ">Komut Enjeksiyonu</a>
  
</div>
    </div>

    <div class="col-sm-9">
      <h2>XSS</h2>
       <h5><span class="label label-primary" data-toggle="modal" data-target="#myModal">Yardım!</span></h5><br>
   <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Zafiyetin Sömürülmesi Hakkında Bilgi</h4>
        </div>
        <div class="modal-body">
        <h5><a class="label label-success" href="xssafe.php">Zaafiyeti Çöz</a></h5><br>
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
    <p>XSS i göstermek için küçük bir login sayfası oluşturulmuştur. İlk olarak kullanıcı girişi yapılmasını istediğimiz için xss sayfası direkt olarak kullanıcı giriş sayfasına yönlendirilmiştir. </p>
<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Giriş Yap</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Kayıt Ol</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Parola">
									</div>
									 
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Giriş Yap">
											</div>
										</div>
									</div>
                                    
                                    	
                                   
									 
								</form><?php
							

	 
		

                                 if(@$_POST['login-submit'])
{
	$uName= $_POST['username'];
$password=$_POST['password'];

	
$mysqli = new mysqli("localhost", "root", "", "guvenlilk");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* prepare statement */
if ($stmt = $mysqli->prepare("Select id, kullaniciAdi FROM kullanici WHERE kullaniciAdi= ? and parola=? ")) {
	
	  $stmt->bind_param("ss", $uName, $password);
	
    $stmt->execute();

    /* bind variables to prepared statement */
    $stmt->bind_result($col1, $col2);
 while($stmt->fetch()) {
 							
							 
  $_SESSION["id"]=$col1;
	$_SESSION["isim"]=$col2;
	 print_r($_SESSION); 
   
 header("location:xss.php");
} 
  
 	/**/
    }

    /* close statement */
    $stmt->close();

/* close connection */
$mysqli->close();
}
?>
                                
                                
                                
                                
								<form id="register-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Kullanıcı Adı" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Adresi" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Parola">
									</div>
									<div class="form-group">
										<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Parola Tekrar">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Kayıt Ol!">
											</div>
										</div>
									</div>
								</form>
                                <?php
                                 if(@$_POST['register-submit'])
{
	$uName= $_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm-password'];
$email=$_POST['email'];
	if($password==$confirm)
	{
$mysqli = new mysqli("localhost", "root", "", "guvenlilk");

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* prepare statement */
if ($stmt = $mysqli->prepare("INSERT INTO kullanici (kullaniciAdi, parola,mail) VALUES (?, ?,?)")) {
 
    // Bind the variables to the parameter as strings. 
    $stmt->bind_param("sss", $uName, $password,$email);
 
    // Execute the statement.
    $stmt->execute();
 
    // Close the prepared statement.
    $stmt->close();
 
}

/* close connection */
$mysqli->close();
}else
{
	/*header("location:sql.php");*/
	 
	
	}
}

?>
                                
                                
                                
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
