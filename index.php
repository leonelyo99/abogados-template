<!DOCTYPE HTML>
<html>
	<head>
		<title>Louquez y Fourcade</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--css-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/estilo.css">
		
		<!--js-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.flip.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/altoBanner.js"></script>
		
	</head>
	<body>
				<!-- Header -->
		<header id="header">
				<div class="inner">
					<div class="d-block d-sm-block d-md-block d-lg-none d-xl-none" style=" height: 30px !important;  line-height: 55px !important; padding-bottom: 50px !important;">
						<a href="#navPanel" class="navPanelToggle">
							<span class="fa fa-bars"></span>
						</a>
					</div>
					
					<nav id="nav" style="line-height: 600% !important; height: 100px !important;">
						<a href="index.php">Home</a>
						<a href="Quienes-Somos.php">Quienes Somos</a>
						
						<img src="images/logo-menu.png" class="logo" style="margin-top: 0% !important;">
						<a href="areas.php">Areas De Practica</a>
						<a href="blog.php#blogl">Blog</a>
						<a href="#abajo">Contacto</a>
					</nav>
				</div>
			</header>
		<!-- Banner -->
			<section id="banner">
				<div  class="inner">
					<div class="flex">
						<img src="images/logo-home.png" class="img-fluid" alt="Responsive image" id="banner">			
					</div>
				</div>
			</section>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<h2>Blog</h2>
					<div class="row">
						
						<div class="col-12 col-md-6 col-lg-4">
							<div class="image round">
								<br>
								<img src="images/img-blog1.jpg" class="img-fluid" alt="Responsive image"/>
							</div>
							<br><br>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="image round d-none d-sm-none d-md-none d-md-block">
								<br>
								<img src="images/img-blog2.jpg" class="img-fluid" alt="Responsive image"/>
							</div>
							<br><br>
								<h3>Conocenos</h3>
							
							<p>somos una firma seria de abogados si le interesa</br> puede ver nuestros movimientos en nuestro blog</br> clickeado el siguiente boton.</p>
							

							
							<a href="blog.php#blogl" class="button special">Ingresar</a>
							
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="image round  d-none d-sm-none d-md-none d-md-block">
								<br>
								<img src="images/img-blog3.jpg" class="img-fluid" alt="Responsive image"/>
							</div>
							<br><br>
						</div>

					</div>
				</div>
			</div>
			</section>

		<!-- Footer -->

			<footer id="footer">
				<a name="abajo"></a>	
					<h3 id="footer-titulo">Contactanos</h3>


				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d704.3144643751116!2d-68.84258358971083!3d-32.890153904130976!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5451175f540b715e!2sLuquez+%26+Fourcade+Abogados!5e0!3m2!1ses-419!2sar!4v1544622361860" width="80%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="inner">
	
					
					
					<form action="enviar.php" method="post">
						<div class="field half first">
							<label for="name" class="size18 float">Nombre</label>
							<input name="nombre" type="text" placeholder="Nombre">
						</div>
						<div class="field half">
							<label for="email" class="size18 float">Email</label>
							<input name="email" type="email" placeholder="Email">
						</div>
						<div class="12u$">
							<label for="message" class="size26">Mensaje</label>
							<textarea name="mensaje" rows="6" placeholder="Mensaje"></textarea>
						</div>
					<input value="Enviar Mensaje" class="button alt" type="submit"></li>
				</div>
				
			</footer>
			<div id="footerindex">
				<img src="images/logo-menu.png" alt=""><br>
			
				<div id="copy">&copy;desarrollado por Viewpoints</div>
			</div>

	</body>
</html>