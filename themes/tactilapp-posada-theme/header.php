<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Posada Fuentes Carrionas</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Descripción de la posada">
	<meta name="author" content="TactilApp.com" >
	<meta charset="utf-8">
		
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">	
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css" rel="stylesheet">
	
	<?php echo '<!--[if IE 7]><link href="'.get_stylesheet_directory_uri().'/css/font-awesome-ie7.css" rel="stylesheet"><![endif]-->';?>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<link rel="stylesheet/less" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.less" />

	<script type="text/javascript">
		// Esto se eliminará en la versión final, ya que el CSS irá compilado con LESSCompiler
	
	    less = { 
	        env: "development", // or "production"
	        async: true,       // load imports async
	        fileAsync: false,   // load imports async when in a page under
	                            // a file protocol
	        poll: 1000,         // when in watch mode, time in ms between polls
	        functions: {},      // user functions, keyed by name
	        dumpLineNumbers: "comments", // or "mediaquery" or "all"
	        relativeUrls: false,// whether to adjust url's to be relative
	                            // if false, url's are already relative to the
	                            // entry less file
	        // rootpath: ":/a.com/"// a path to add on to the start of every url
	                            //resource
	    };
	</script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/less.js" type="text/javascript"></script>
</head>

<body>
<header id="header">
	<div id="headerbg"></div>
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<div>
<!-- 					<h1 class="brand">Posada Fuentes Carrionas</h1> -->
					
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>

					<div class="nav-collapse collapse navbar-responsive-collapse">
						<ul id="nav" class="nav">
							<li><a href="#contacto">contacto</a></li>
							<li><a href="#inicio">inicio</a></li>
							<li><a href="#localizacion">localización</a></li>
							<li><a href="#servicios">servicios</a></li>
							<li><a href="#actividades">actividades</a></li>
							<li><a href="#tarifas">tarifas</a></li>
						</ul>
					</div>		
				</div>
			</div>
		</div>
	</div>
</header>