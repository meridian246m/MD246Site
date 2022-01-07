<?php include'easy-protect.php';protect('kosel');?>
<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.png" type="image/png">

	<title>MeriDian 246 - Записи з Репетицій | Україна</title>
	<meta name="description" CONTENT="Записи з репетицій - Meridian 246 м.Олешки +38993907684">
	<meta name="keywords" content="Українська музика,Українська альтернативна музика,Українська рок музика,Українська метал музика, Украинская музыка,md246,meridian 246, меридиан 246, меридіан 246" />
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://md246.com/css/font-awesome.css">
	<link rel="stylesheet" href="https://md246.com/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://md246.com/css/animate.css">
	<link rel="stylesheet" href="https://md246.com/css/prettyPhoto.css">
	<link href="https://md246.com/style.css" rel="stylesheet">
	<link href="https://md246.com/css/responsive.css" rel="stylesheet">


	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="body_bk_ground_black">
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="https://md246.com/img/meridian-246-logo.png" alt=""></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li class="active smooth-scroll"><a href="https://md246.com/index.php#home">ГОЛОВНА</a></li>
					<li class="smooth-scroll"><a href="https://md246.com/index.php#service">НАША МУЗИКА</a></li>
					<li class="smooth-scroll"><a href="https://md246.com/index.php#team">СКЛАД ГУРТУ</a></li>
					<li class="smooth-scroll"><a href="https://md246.com/index.php#gallery">ГАЛЕРЕЯ</a></li>
					<li class="smooth-scroll"><a href="https://md246.com/index.php#news">ЗАХОДИ</a></li>
					<li class="smooth-scroll"><a href="https://md246.com/index.php#stat">НОВИНИ</a></li>
					<li class="smooth-scroll"><a href="https://md246.com/index.php#contact">КОНТАКТИ</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>


<!--Home Section-->
<section id="md246-rep">
	<div class="overlay"></div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!--Indicator-->
<!--
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
-->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center bk_ground_black">
								<h3 class="bk_ground_red">Слухай сучасну Українську Альтернативну Музику!</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center bk_ground_black">
								<h3 class="bk_ground_red">Важкі та динамічна Українська Музика!</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center bk_ground_black">
								<h3 class="bk_ground_red">Час Від часу Мелодіна та легка!</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-md-12 wow bounceInUp">
							<div class="home-text text-center bk_ground_black">
								<h3 class="bk_ground_red">MeriDian 246 - Може слухати кожен!</h3>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!--statti istorii section-->
<section id="stat">
	<div class="container">
		<div class="section-heading text-center text-uppercase wow  wow bounceInRight">
			<h2 class="bk_ground_red">ЗАПИСИ <span>З РЕПЕТИЦІЙ</span></h2>
		</div>
		<div class="row  wow bounceInLeft ">
<!-----------Якісь фото---->
		</div>
		<div class="row">
		<div class="row  wow bounceInLeft">
			<p class="story_text">
			
			
			
			
	<ul class="font_stat_url bk_ground_black">
	
<?php
$dir    = 'rep-audio';
$files = scandir($dir);
$i=1;
$mass=count($files);
while ($i < $mass-1)
{
	$i++;
	$str=strval ($files[$i]);
	$put_size=filesize ($files[$i]);
	echo '<li><a href=rep-audio/'.$str.' download>'.$str.'</a>'.$put_size.'</li>';	 
}
?>



	</ul>
<center><a href="https://md246.com/index.php#service">Повернутись на головну сторінку...</a></center>
			
			
							
			</p>
		</div>						
		</div>
	</div>
</section>

<!-- footer-area-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-2 text-center">
				<a href=""><img src="https://md246.com/img/meridian-246-foo-logo.png" alt="logo"></a>
			</div>
			<div class="col-sm-8">
				<div class="footer-p text-center">
					<p>© Copyright 2014 - 2015, All Rights Reserved, Designed by: www.designoatmeal.com</p>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="footer-social text-center">
					<a href="https://www.facebook.com/Meridian246/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/meridian246m"><i class="fa fa-twitter"></i></a>
<!--
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-google-plus"></i></a>
					<a href=""><i class="fa fa-rss"></i></a>
-->
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://md246.com/js/jquery-1.11.3.min.js"></script>
<script src="https://md246.com/js/bootstrap.min.js"></script>
<script src="https://md246.com/js/isotope.2.2.2min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="https://md246.com/js/wow.min.js"></script>
<script src="https://md246.com/js/jquery.prettyPhoto.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://md246.com/js/main.js"></script>
</body>
</html>
