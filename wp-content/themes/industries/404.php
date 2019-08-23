<?php
$options = _WSH()->option();
    get_header(); 
?>

<section class="error-section error-404">
	<div class="container">
	 <div class="row">
	 	<div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
	 		<div class="error-searchbox">
	 			<h4><?php esc_html_e('Search Keywords.', 'industries');?></h4>
	 			<br>
			 			
	 			<div class="search-box text-center">
				<?php get_template_part('searchform2')?>
				</div>
	 		</div>
	 	</div>
	 	<div class="col-md-6 col-sm-6 col-xs-12">
	 		<div class="text-content">
	        	<div class="bigger-text"><?php esc_html_e('404', 'industries');?></div>
	            <h3><?php esc_html_e('Opps! You’ve got the wrong page', 'industries');?></h3>
	            <div class="text">
	            	<br>
	            	<p><?php esc_html_e('Please check your URL is correct or not, either you can go back to the home page of the', 'industries');?></p>
                    <p><?php esc_html_e('Industries or contact our support team.', 'industries');?></p><br>
	            </div>
	            
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="thm-btn error-page"><?php esc_html_e('Back To Home', 'industries');?></a>
	        </div>
	 	</div>
	 </div>
 
    </div>
</section>
  		
<?php get_footer(); ?>