<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sign in - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="{$conf->app_root}/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$conf->app_root}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{$conf->app_root}/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="{$conf->app_root}/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="{$conf->app_root}/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">



		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
						
							<hr>
							
							<form action="<?php print($config->app_root); ?>/app/Security/login.php" method="post">
								<div class="top-margin">

									<label>Username <span class="text-danger">*</span></label>
									<input id="id_login" type="text" name="login" value="<?php $form['login']; ?>" class="form-control">

								</div>
								<div class="top-margin">

									<label>Password <span class="text-danger">*</span></label>
									<input id="id_pass" type="password" name="pass" class="form-control">

								</div>

								<hr>

								<div class="row">
									
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" >Sign in</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p>Nie mam telfonu :(<br>
								<a href="mailto:#">some.hidden.email@somewhere.com</a><br>
								<br>
								234 Hidden Pond Road, Hidden Land
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me there<br>(Only github work ;p)</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href="https://github.com/Geminin"><i class="fa fa-github fa-2"></i></a>
								<a href="https://www.facebook.com/mateusz.wojcik.589100"><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p> Created by poor student</p>

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
							<p class="text-right">
								Copyright &copy; 2022, NoName. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
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