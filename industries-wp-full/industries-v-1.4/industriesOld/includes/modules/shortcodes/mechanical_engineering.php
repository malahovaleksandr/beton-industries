<?php
ob_start() ;?>

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
<br>

<div class="outer">
    <div class="video-box img-box display-tc wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">
        <img src="<?php echo esc_url(wp_get_attachment_url($image));?>" alt="<?php esc_html_e('image', 'industries');?>" class="tran7s">
        <a href="<?php echo esc_url($video_link);?>" class="fancy_video fancybox.iframe tran3s"><div><span><i class="fa fa-play" aria-hidden="true"></i></span></div></a>

    </div>
    <div class="text-box display-tcm pl-20">
        <div class="text">
            <p><?php echo balanceTags($text1);?></p>
        </div>
    </div>       
</div>
<br><br><br>

<div class="outer">
    <div class="text-box">
        <div class="section-title inner">
            <h2><?php echo balanceTags($title1);?></h2>
            <span class="decor"></span>
        </div>
        <div class="text">
            <p><?php echo balanceTags($text2);?></p>
        </div>
    </div>
</div>
<br>
<div class="outer">
    <div class="img-box">
        <img src="<?php echo esc_url(wp_get_attachment_url($image1));?>" alt="">
    </div>
</div>

<?php
	$output = ob_get_contents(); 
   ob_end_clean(); 
   return $output ; ?>
   