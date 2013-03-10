<?php
	function get_foto_paths($relative_paths){
		$result = array();
		foreach ($relative_paths as $relative)
			$result[] = get_stylesheet_directory_uri().'/img/'.$relative;
		return $result;
	}
	
	$fotos = array('posada_lejos.jpg', 'posada_ventana_bano.jpg', 'posada_fachada.jpg', 'posada_juegos.jpg');
	$fotos = get_foto_paths($fotos);
?>
	<section id="home" data-type="page" data-name="inicio">
		<div id="background"></div>
		<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<div id="myCarousel" class="carousel slide">
				  <ol class="carousel-indicators">
  				  
  				  <?php	for ($i = 0; $i < count($fotos); $i++): $foto = $fotos[$i]; ?>
				    <li data-target="#myCarousel" data-slide-to="<?php echo $i?>" <?php if ($i == 0) echo 'class="active"'?>></li>
				  <?php endfor?>
				  
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				  
				  <?php	for ($i = 0; $i < count($fotos); $i++): $foto = $fotos[$i]; ?>
				    <div class="<?php if ($i == 0) echo 'active'?> item">
					    <img src="<?php echo $foto?>" alt="" />
				    </div>
				  
				  <?php endfor; ?>
				  
				  </div>
				  <!-- Carousel nav -->
				  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>
			</div>
		</div>
		</div>
		</div>
	</section>