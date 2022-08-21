
<!DOCTYPE html>
<html>

<head>
	
	<meta charset="utf-8">

	<!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

	<!--------------------------------->
	<title>Web Teknoloji Projesi</title>

	
</head>




	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

		<div class="container">
		
			<a href="mirasimiz.html" class="navbar-brand text-black">
	  		  <i class="fas fa-grin-wink"></i>
	  		   
	      	</a>

			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav justify-content-center ">

					<li class="nav-item">
						<a href="anasayfa.html" class="nav-link active  text-white">
	      				Anasayfa
	      				</a></li>

					<li class="nav-item">
						<a href="benimhakkimda.html" class="nav-link active  text-white">
	      				Benim Hakkımda
	      				</a></li>

					<li class="nav-item">
						<a href="ozgecmis.html" class="nav-link active  text-white">
	      				Özgeçmiş
	      				</a></li>

	      			<li class="nav-item">
						<a href="sehrim.html" class="nav-link active  text-white">
	      				Şehrim
	      				</a></li>	

					<li class="nav-item">
						<a href="mirasimiz.html" class="nav-link active  text-white">
	      				Mirasımız
	      				</a></li>

	      			<li class="nav-item">
						<a href="iletisim.html" class="nav-link active  text-white">
	      				İletişim
	      				</a></li>
                    <li class="nav-item">
                            <a href="giris.html" class="nav-link active  text-white">
                              Giriş
                              </a></li>    
                    </ul>
                </div>
    
            </div>
        </nav>
	<header>
		<div class="bg-info text-light jumbotron balikcilar-jumbotron">
			<div class="container">
				<div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>
			</div>
		</div>
	</header>
	<br><br><br><br><br><br><br> 
	
	<div class="container py-5" style="color:white; text-align:center; align-items:center;">
	 <div class="row">
	   <div class="col loginMesaj">
		 <?php if($_POST["mail"]=="elifsevvalsacli@gmail.com" && $_POST["sifre"]=="b211210068")
			 {
		 echo"Hoşgeldiniz ".$_POST["mail"];
		 echo"<br>Girişiniz onaylandı.";
			 }
			  else{
		 echo "Girdiğiniz e-posta veya şifre hatalı.";
		 header("refresh:3; giriş.html");
				  }    
		 ?>
		 </div>
	   </div>
	 </div> 
	
 <br><br><br><br><br><br><br><br><br>
	
	
	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	
</body>
</html>