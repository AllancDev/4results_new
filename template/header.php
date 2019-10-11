<?php

	$uri = explode("/", $_SERVER['REQUEST_URI']);
	$archive = explode(".php", $uri[2]);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Results | Institucional</title>
	<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="./img/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="Allan Cristian" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	

</head>

<body>
	<div id="wrapper" class="home-page">
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="pull-left hidden-xs" style="font-size: 1em;"><i class="fa fa-envelope"
								style="color:#fff;"></i><span><a href = "mailto: contato@4results.com.br" style = "color: #fff;">contato@4results.com.br</a> &nbsp;&nbsp; &nbsp;&nbsp;</span>
							<i class="fa fa-phone" style="color:#fff;"></i><span>+55 41 3155-5850</span></p>
						<p class="pull-right social-media" style="font-size: 1.5em;">
							<a href="https://www.facebook.com/4Results-135526123279485" target = "blank"><i class="fa fa-facebook" style="color:#fff;"></i></a>
							<a href="https://twitter.com/4results_" target = "blank"><i class="fa fa-twitter" style="color:#fff;"></i></a>
							<a href="https://www.linkedin.com/company/4results-ltda-" target = "blank"><i class="fa fa-linkedin" style="color:#fff;"></i></a>
							<a href="#"><i class="fa fa-whatsapp" aria-hidden="true" target = "blank"></i>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- start header -->
		<header>
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="quemsomos.php"><img src="img/logo.png" alt="logo" /></a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							<li <?= ($archive[0] == "home" || $archive[0] == "") ? 'class="active"' : "" ?> ><a href="home.php" >Home</a></li>
							<li <?= ($archive[0] == "quemsomos" ) ? 'class="active"' : "" ?>><a href="quemsomos.php">Quem Somos?</a></li>
							<li  <?= ($archive[0] == "solutions" ) ? 'class=" dropdown active"' : 'class="dropdown"' ?>>
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">Soluções <b
										class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="solutions.php">ERP</a></li>
									<li><a href="solutions.php">CRM</a></li>
									<li><a href="solutions.php">AZURE</a></li>
									<li><a href="solutions.php">OFFICE 365</a></li>
									<li><a href="solutions.php">MASTERSAF</a></li>
									<li><a href="solutions.php">Outras</a></li>
								</ul>
							</li>
							<li <?= ($archive[0] == "notices" ) ? 'class="active"' : "" ?> ><a href="notices.php">Noticias</a></li>
							<li <?= ($archive[0] == "services" ) ? 'class="dropdown active"' : 'class="dropdown"' ?> >
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">Serviços <b
										class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="services.php">Implantação</a></li>
									<li><a href="services.php">Suporte</a></li>
									<li><a href="services.php">Outsourcing</a></li>
									<li><a href="services.php">Fábrica de Software</a></li>
									<li><a href="services.php">Gestão de Legados</a></li>
								</ul>
							</li>
							<!-- <li><a href="solutions.php">Clientes</a></li> -->
							<li <?= ($archive[0] == "cases" ) ? 'class="active"' : "" ?> ><a href="cases.php">Cases</a></li>
							<li <?= ($archive[0] == "events" ) ? 'class="active"' : "" ?> ><a href="events.php">Eventos</a></li>
							<li <?= ($archive[0] == "contact" ) ? 'class="active"' : "" ?> ><a href="contact.php">Contato</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- end header -->