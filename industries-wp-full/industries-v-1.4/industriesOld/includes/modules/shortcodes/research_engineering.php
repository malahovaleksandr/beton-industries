<?php
ob_start() ;?>

<div class="outer">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="chemical-img-box img-box">
                <img src="<?php echo esc_url(wp_get_attachment_url($image1));?>" alt="">
                <p><?php echo balanceTags($des1);?></p>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="chemical-img-box img-box">
                <img src="<?php echo esc_url(wp_get_attachment_url($image2));?>" alt="">
                <p><?php echo balanceTags($des2);?></p>
            </div>
        </div>
    </div>
</div>
<div class="mt-30"></div>
        
<div class="outer">
    <div class="text-box">
        <div class="section-title inner">
            <h2><?php echo balanceTags($title);?></h2>
            <span class="decor"></span>
        </div>
        <div class="text">
            <p><?php echo balanceTags($text);?></p>
        </div>
    </div>
        
</div>
<br><br>
<div class="border-bottom"></div>
<br><br>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   