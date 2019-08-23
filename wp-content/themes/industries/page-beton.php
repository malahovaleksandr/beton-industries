<?php $options = _WSH()->option();
get_header();
$settings = industries_set(industries_set(get_post_meta(get_the_ID(), 'bunch_page_meta', true), 'bunch_page_options'),
    0);
$meta = _WSH()->get_meta('_bunch_layout_settings');
$meta1 = _WSH()->get_meta('_bunch_header_settings');
if (industries_set($_GET, 'layout_style')) {
    $layout = industries_set($_GET, 'layout_style');
} else {
    $layout = industries_set($meta, 'layout', 'right');
}
$sidebar = industries_set($meta, 'sidebar', 'blog-sidebar');
$classes = (!$layout || $layout == 'full' || industries_set($_GET,
        'layout_style') == 'full') ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-md-9 col-sm-12 ';
$bg = industries_set($meta1, 'header_img');
$title = industries_set($meta1, 'header_title');
?>

    <!--Page Title-->
    <!--    <div class="inner-banner has-base-color-overlay text-center"-->
    <!--         --><?php //if ($bg): ?><!--style="background-image:url('--><?php //echo esc_attr($bg) ?><?php //endif; ?><!-->
    <!--        <div class="container">-->
    <!--            <div class="box">-->
    <!--                <h3>--><?php //if ($title) {
//                        echo wp_kses_post($title);
//                    } else {
//                        wp_title('');
//                    } ?><!--</h3>-->
    <!--            </div><!-- /.box -->
    <!--        </div><!-- /.container -->
    <!--    </div>-->

    <div class="breadcumb-wrapper">
        <div class="container">
            <div class="pull-left">
                <div class="list-inline link-list">
                    <?php echo balanceTags(industries_get_the_breadcrumb()); ?>
                </div><!-- /.list-line -->
            </div><!-- /.pull-left -->
        </div><!-- /.container -->
    </div>

    <!--Sidebar Page-->
    <section class="news style-2">
        <div class="container">
            <div class="wrapperPrice">
                <p>Вы можете купить товарный бетон по телефону +7 (978) 907-0008 или через форму на сайте.</p><br>
                <p>Компания ООО "Таврида Бетон" предлагает бетонные смеси широкого ассортимента собственного
                    производства.
                    При строительстве любого объекта нельзя обойтись без качественного бетона, </p>
                <p>Одним из главных приоритетов нашей работы является гарантия качества и количества производимой
                    продукции.
                    Предусмотрена гибкая система ценовых скидок для постоянных Клиентов и крупных заказчиков
                </p>
                <div class="priceLine priceFirstLine">
                    <div class="priceName">Марка бетона</div>
                    <div class="priceCoast">Цена за 1 куб.м без учета доставки</div>
                </div>
                <!--- FIRST BETON-->
                <div class="priceLine priceLineType">
                    <div class="priceName"><?= get_post_meta(480, 'betonHavy', true) ?></div>
                </div>
                <?php
                for ($i = 1; $i <= 15; $i++) { ?>
                    <?php
                    $name = get_post_meta(480, 'betonHavyName' . $i, true);
                    $price = get_post_meta(480, 'betonHavyPrice' . $i, true);
                    if (!empty($name) && !empty($price)) { ?>
                        <div class="priceLine">
                            <div class="priceName"><?= $name ?></div>
                            <div class="priceCoast"><?= $price ?></div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <!--- FIRST BETON-->
                <div class="priceLine priceLineType">
                    <div class="priceName"><?= get_post_meta(480, 'betonTiny', true) ?></div>
                </div>
                <?php
                for ($i = 1; $i <= 15; $i++) { ?>
                    <?php
                    $name = get_post_meta(480, 'betonTinyName' . $i, true);
                    $price = get_post_meta(480, 'betonTinyPrice' . $i, true);
                    if (!empty($name) && !empty($price)) { ?>
                        <div class="priceLine">
                            <div class="priceName"><?= $name ?></div>
                            <div class="priceCoast"><?= $price ?></div>
                        </div>
                    <?php } ?>
                <?php } ?>
                <!--- FIRST BETON-->
                <div class="priceLine priceLineType">
                    <div class="priceName"><?= get_post_meta(480, 'BetonBuilder', true) ?></div>
                </div>
                <?php
                for ($i = 1; $i <= 15; $i++) { ?>
                    <?php
                    $name = get_post_meta(480, 'BetonBuilderName' . $i, true);
                    $price = get_post_meta(480, 'BetonBuilderPrice' . $i, true);
                    if (!empty($name) && !empty($price)) { ?>
                        <div class="priceLine">
                            <div class="priceName"><?= $name ?></div>
                            <div class="priceCoast"><?= $price ?></div>
                        </div>
                    <?php } ?>
                <?php } ?>

            </div>
        </div>
    </section>

<?php get_footer(); ?>