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
<div class="buttonPopupMail">Оставить заявку</div>
<div id="contact_form_pop">
    <div class="titlePopup">Оставить заявку</div>
    <div class="closePopup">X</div>
    <div class="clear_fix"></div>
    <p>Все введенные вами данные будут отправленны нашему менеджеру и он свяжеться с Вами для уточения деталей заявки</p>
    <?= do_shortcode('[contact-form-7 id="602" title="заказ бетона"]') ?>
</div>

<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-arrows"></span></div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49504474 = new Ya.Metrika2({
                    id:49504474,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49504474" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<?php wp_footer(); ?>
</body>
</html>