<!--Blog Post-->
<div class="blogList_single_post clear_fix wow fadeInUp boxShadow" style="visibility: visible; animation-name: fadeInUp;">
    <?php if ( has_post_thumbnail() ):?>
    <div class="img_holder">
        <?php the_post_thumbnail('industries_1170x420', array('class' => 'img-responsive'));?>
    </div> <!-- End of .img_holder -->
    <?php endif;?>
    <div class="post">
        <div class="news-date">
            <?php echo get_the_date('F d, Y');?>
        </div>
        
        <div class="text">
            <p><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>"><?php esc_html_e('by', 'industries');?> <?php the_author();?></a> <?php the_category(', '); ?> <a href="<?php echo esc_url(get_permalink(get_the_id()).'#comment');?>"><?php comments_number( '0 комментариев', '1 комментарий', '% комментариев' ); ?></a></p>
            <h4><a href="<?php echo esc_url(get_permalink(get_the_id()));?>"><?php the_title();?></a></h4>
            <?php the_excerpt();?>
            <div class="link"><a href="<?php echo esc_url(get_permalink(get_the_id()));?>" class="tran3s"><?php esc_html_e('Читать далее...', 'industries');?></a></div>
            
        </div>
        
    </div> <!-- End of .post -->
</div>
