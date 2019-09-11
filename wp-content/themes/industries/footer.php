<?php $options = get_option('wp_industries'.'_theme_options');?>
	<?php if(!(industries_set($options, 'hide_whole_footer'))):?>
	<footer class="footer">
        <div class="wrapperFooter">
            <div class="footerBlock3">
                <div class="icon-box"><span class="fa fa-map-marker"></span></div>
                    <div class="headerIconText">
                        <?php echo nl2br(wp_kses_post(industries_set($options, 'address'))); ?>
                    </div>
            </div>
            <div class="footerBlock3">
                <div class="icon-box"><span class="fa fa-phone"></span></div>
                <div class="headerIconText">
                     <a href="tel:<?php echo nl2br(wp_kses_post(industries_set($options, 'phone_no'))); ?> ">
                         <?php echo nl2br(wp_kses_post(industries_set($options, 'phone_no'))); ?>
                     </a>
                    <br>
                    <a href="mailto:<?php echo balanceTags(industries_set($options,'email')); ?> ">
                        <?php echo balanceTags(industries_set($options,'email')); ?>
                    </a>
                </div>
            </div>
            <div class="footerBlock3">
                <div class="icon-box"><span class="fa fa-clock-o"></span></div>
                <div class="headerIconText">
                    <?php echo balanceTags(industries_set($options, 'office_time')); ?>
                </div>
            </div>
        </div>
    </footer>
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