<?php
ob_start() ;?>

<div class="outer">
    <div class="text-box display-tcm pr-20">
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
    <div class="img-box display-tcm">
        <a href="<?php echo esc_url($link);?>"><img src="<?php echo esc_url(wp_get_attachment_url($img));?>" alt=""></a>
    </div>
        
</div>
<br><br>
<div class="border-bottom"></div>
<br><br>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   