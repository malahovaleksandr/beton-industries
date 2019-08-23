<?php   
ob_start();
?>

<section class="home-google-map">
	<div 
		class="google-map" 
		id="contact-google-map" 
		data-map-lat="<?php echo esc_js($lat);?>" 
		data-map-lng="<?php echo esc_js($long);?>" 
		data-icon-path="http://asianitbd.com/wp/industries/wp-content/themes/industries/images/logo/map-marker.png"
		data-map-title="<?php echo esc_js($mark_title);?>"
		data-map-zoom="12" >

	</div>

</section>

<?php return ob_get_clean();?>		