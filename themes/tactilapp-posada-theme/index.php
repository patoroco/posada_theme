<?php
	get_header();
	
	function print_theme($relative = ''){
		echo get_stylesheet_directory_uri().$relative;
	}
?>

<?php
	include('sections/home.php');
	include('sections/localizacion.php');
	include('sections/servicios.php');
	
/*
	include('sections/features.php');
	include('sections/portfolio.php');
	include('sections/services.php');
*/
	
	include('sections/contacto.php');
?>	
<?php
	get_footer();
?>