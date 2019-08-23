<?php
ob_start() ;?>

<div class="outer">
    <div class="img-box">
        <img src="<?php echo esc_url(wp_get_attachment_url($image));?>" alt="">
    </div>
</div>
<br>
<div class="outer">
    <div class="text-box">
        <div class="section-title inner">
            <h2><?php echo balanceTags($title);?></h2>
            <span class="decor"></span>
        </div>
        <div class="text">
            <p><?php echo balanceTags($text1);?></p>
            <br>
            <p><?php echo balanceTags($text2);?></p>
        </div>
    </div>
</div>
<br>
<div class="mt-30"></div>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   