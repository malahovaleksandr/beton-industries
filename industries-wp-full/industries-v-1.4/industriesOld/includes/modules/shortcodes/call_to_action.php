<?php
ob_start() ;?>

<section class="call-to-action-home" style="background: url('<?php echo esc_url(wp_get_attachment_url($bg_img));?>');">
	<div class="container">
		<p><?php echo balanceTags($contents);?></p>
	</div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   