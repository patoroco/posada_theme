<?php
	get_header();
?>

<?php
	include('sections/home.php');
	include('sections/about.php');
	include('sections/contact.php');
	include('sections/features.php');
	include('sections/portfolio.php');
	include('sections/services.php');
?>

<!--
	<section id="contact" data-type="page" data-name="inicio">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<h1 class="title">Contact<small>send us a message</small></h1>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span6">
					<div class="content">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum metus odio, viverra a luctus et, ornare in sapien. Praesent vulputate imperdiet mollis. Curabitur sed aliquam metus. Aliquam erat volutpat. In at libero vel nisl malesuada condimentum ac vel nisl. Suspendisse vulputate sollicitudin orci, at hendrerit lorem scelerisque id.</p>
						<form>
							<fieldset>
								<div class="control-group">
									<div class="controls">
										<input class="span12" type="text" placeholder="Your Full Name">
									</div>
									<div class="controls">
										<input class="span12" type="text" placeholder="Your Email">
									</div>			
									<div class="controls">
										<input class="span12" type="text" placeholder="Message Subject">
									</div>
									<div class="controls">
										<textarea class="span12" id="textarea" rows="6" placeholder="Your Message"></textarea>
									</div>
									<button class="btn btn-default">Send Message</button>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="span6">
					<div class="content">
						<div id="map_canvas"></div>
						<address>
							<strong>Spring</strong>
							<br />
							111 Some Street, Suite 100
							<br />
							San Francisco, CA 94107
							<br /><br />
							Phone: (123) 456-7890
							<br />
							Fax: (123) 456-7890
						</address>
					</div>
				</div>
			</div>
		</div>
	</section>	
-->

	
<?php
	get_footer();
?>