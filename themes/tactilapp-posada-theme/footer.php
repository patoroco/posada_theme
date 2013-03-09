	<footer id="footer">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<p>copyright &copy; 2013 Spring - all rights reserved</p>
				</span>
			</div>
		</div>
	</footer>


    <script src="http://code.jquery.com/jquery.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	    
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/googlemaps.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/onepage.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/posada.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.hoverdir.js"></script>

	<script type="text/javascript">

		$(function() {
			$('.gallery > div').hoverdir( {
				hoverDelay	: 75
			} );
		});

		var options = {
			'offsetHeader' : $('#header').height(),
			'targetMenus' : [{'get' : '#nav a', 'target' : 'href'}],
			'targetPages' : [{'get' : 'section[data-type="page"]', 'target' : 'data-name'}],
			'detectByHash' : true,
			'detectByScroll' : true,
			'detectByResize' : true,
			'beforeScroll' : function( menu, page, $this ) {},
			'afterScroll' : function( menu, page, $this ) {}
		}

		var myonepage = new onepage(options);

	</script>



</body>
</html>