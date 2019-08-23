<?php $options = get_option('wp_industries'.'_theme_options');?>
	
	<?php if(!(industries_set($options, 'hide_whole_footer'))):?>
	<footer class="footer has-black-color-overlay has-dark-texture">
        <?php if ( is_active_sidebar( 'footer-sidebar' ) ) { ?>
        <div class="container">
            <div class="row">
               <?php dynamic_sidebar( 'footer-sidebar' ); ?>
    		</div><!-- /.row -->
        </div><!-- /.container -->
        <?php } ?>
    </footer><!-- /.footer -->
    <?php endif;?>
    
    <?php if(!(industries_set($options, 'hide_bottom_footer'))):?>
    <section class="footer-bottom">
        <div class="container">
            <div class="pull-left get-text">
                <ul>
                <?php if(industries_set($options, 'condition')):?><li><a href="<?php echo esc_url(industries_set($options, 'condition'));?>"><?php esc_html_e('Terms & Conditions', 'industries');?></a></li><?php endif;?>
                <?php if(industries_set($options, 'privacy')):?><li><a href="<?php echo esc_url(industries_set($options, 'privacy'));?>"><?php esc_html_e('Privacy Policy', 'industries');?></a></li><?php endif;?>
                </ul>
            </div><!-- /.pull-right -->
            <div class="pull-right copy-text">
                <p><?php echo wp_kses_post(industries_set($options, 'copyright'));?></p>
            </div><!-- /.pull-left -->
        </div><!-- /.container -->
    </section><!-- /.footer-bottom -->
    <?php endif;?>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-arrows"></span></div>

<?php wp_footer(); ?>
</body>
</html>