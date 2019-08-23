<?php
ob_start() ;?>

<section class="call-to-action" style="background-image:url('<?php echo esc_url(wp_get_attachment_url($bg_img));?>');">
	<div class="container">
        <div class="text"><?php echo balanceTags($title);?></div>
        <p><?php echo balanceTags($text);?></p>
        <a class="thm-btn" href="<?php echo esc_url($btn_link);?>"><?php echo balanceTags($btn_text);?></a>   
    </div>
</section>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   