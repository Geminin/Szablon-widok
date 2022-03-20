<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Progressus - Free business bootstrap template by GetTemplate</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="/Szablon-widok/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Szablon-widok/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="/Szablon-widok/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="/Szablon-widok/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand"><img src="/Szablon-widok/assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
				    <li><a href="<?php print(_APP_URL);?>">Strona główna</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Projekty <b class="caret"></b></a>
						<ul class="dropdown-menu">

							<li><a href="<?php print(_APP_URL);?>/app/Calc/Index_calc.php">Kalkulator</a></li>

							<li><a href="<?php print(_APP_URL);?>/app/Cred/Index_cred.php">Kalkulator Kredytowy</a></li>

							<li><a href="">Coming Soon</a></li>

							<li><a href="">Coming Soon</a></li>

						</ul>
					</li>
					
					<li><a class="btn" href="<?php print(_APP_ROOT); ?>/app/security/logout.php">Logout</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
    <!-- Tło fade -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">Kalkulator Kredytowy</h1>
				
				<p class="tagline"></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		

	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
        <!-- Kolumny -->
    
	    <div class="jumbotron top-space">
		<form action="<?php print(_APP_URL);?>/app/Cred/App/cred.php" method="post">
		    <div class="container">
			
			    <h3 class="text-center thin"></h3>
			
			    <div class="row">
				    <div class="col-md-3 col-sm-6 highlight">
					Kwota: <br>
					<input id="id_x" type="text" name="Kwota" value="<?php if(isset($Kwota)) print($Kwota); ?>" >
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
					Ilość Lat:<br>
					<input id="id_x" type="text" name="Lata" value="<?php if(isset($Lata)) print($Lata); ?>" >
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
					Procent:<br>
					<input id="id_y" type="text" name="Procent" value="<?php if(isset($Procent)) print($Procent); ?>">
				    </div>
				    <div class="col-md-3 col-sm-6 highlight">
						<?php if (isset($result)){ ?>
							<div style="margin: 20px; padding: 10px; border-radius: 5px; background-image: linear-gradient(to right, rgba(124,252,0), rgba(255,0,0,0)); width:300px;">
							<?php echo 'Rata na jeden miesiąc: '.$result; ?>
							</div>
					<?php } ?>
					<br>
				    </div>
			    </div> <!-- /row  -->
				<input type="submit" value="Oblicz" />
		    </div>
		</form>						
		</div>

	<!-- /Highlights -->


	
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">some.Hidden.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Hidden City, TN 37015
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href="https://github.com/Geminin"><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p> Strona zrobiona przez Studenta</p>

							</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, MW. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>