<?php industries_bunch_global_variable(); 
	$options = _WSH()->option();
	get_header(); 
	if( $wp_query->is_posts_page ) {
		$meta = _WSH()->get_meta('_bunch_layout_settings', get_queried_object()->ID);
		$meta1 = _WSH()->get_meta('_bunch_header_settings', get_queried_object()->ID);
		if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
		$layout = industries_set( $meta, 'layout', 'right' );
		$sidebar = industries_set( $meta, 'sidebar', 'default-sidebar' );
		$bg = industries_set($meta1, 'header_img');
		$title = industries_set($meta1, 'header_title');
	} else {
		$settings  = _WSH()->option(); 
		if(industries_set($_GET, 'layout_style')) $layout = industries_set($_GET, 'layout_style'); else
		$layout = industries_set( $settings, 'archive_page_layout', 'right' );
		$sidebar = industries_set( $settings, 'archive_page_sidebar', 'default-sidebar' );
		$bg = industries_set($settings, 'archive_page_header_img');
		$title = industries_set($settings, 'archive_page_header_title');
	}
	$layout = industries_set( $_GET, 'layout' ) ? industries_set( $_GET, 'layout' ) : $layout;
	$sidebar = ( $sidebar ) ? $sidebar : 'default-sidebar';
	_WSH()->page_settings = array('layout'=>'right', 'sidebar'=>$sidebar);
	$classes = ( !$layout || $layout == 'full' || industries_set($_GET, 'layout_style')=='full' ) ? ' col-lg-12 col-md-12 col-sm-12 col-xs-12 ' : ' col-md-9 col-sm-12 ' ;
	?>

    <!--Page Title-->

    <section class="container container-slider">
        <div class="backgroundHeader"></div>
        <nav class="mainmenu-holder">
            <div class="showMenu">
                <i class="fa fa-list-ul"></i>
            </div>
            <div class="nav-header">
                <ul class="navigation">
                    <?php wp_nav_menu([
                        'theme_location' => 'main_menu',
                        'container_id' => 'navbar-collapse-1',
                        'container_class' => 'navbar-collapse collapse navbar-right',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => false,
                        'items_wrap' => '%3$s',
                        'container' => false,
                        'walker' => new Bunch_Bootstrap_walker(),
                    ]); ?>
                </ul>
            </div>
        </nav>
        <?= do_shortcode('[rev_slider alias="new2"]'); ?>
    </section >
    <section class="benefitsSection">
        <div class="wrapperBenefitsBlock">
            <div class="benefitsBlock">
                <img
                src="<?php echo esc_url(get_template_directory_uri() . '/images/benefits/benefits1.png'); ?>"
                alt="Преимущества">

                <p>Собственное <br/>производство</p>
            </div>
            <div class="benefitsBlock">
                <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/benefits/benefits2.png'); ?>"
                        alt="Преимущества"/>
                <p>Удобное <br/> расположение</p>
            </div>
            <div class="benefitsBlock">
                <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/benefits/benefits3.png'); ?>"
                        alt="Преимущества">
                <p>доступные<br/> цены</p>
            </div>
            <div class="benefitsBlock">
                <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/benefits/benefits4.png'); ?>"
                        alt="Преимущества">
                <p>бетон любых<br/> марок</p>
            </div>
            <div class="benefitsBlock">
                <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/benefits/benefits5.png'); ?>"
                        alt="Преимущества">
                <p>продажа <br/>с доставкой</p>
            </div>
            <div class="benefitsBlock">
                <img
                        src="<?php echo esc_url(get_template_directory_uri() . '/images/benefits/benefits6.png'); ?>"
                        alt="Преимущества">
                <p>уресультация</p>
            </div>
        </div>
        <div class="wrapperPropose">
            <div class="contentPropose">
                <div class="blockProposePrice">
                    <div class="wrapperPrice">
                        <div class="priceLine ">
                            <div class="priceName">Марка бетона</div>
                            <div class="priceCoast">Цена за 1 куб.м без учета доставки</div>
                        </div>
                        <div class="priceLine">
                            <div class="priceName"><?= get_post_meta(430,'beton_name1',true) ?></div>
                            <div class="priceCoast"><?= get_post_meta(430,'price1',true) ?></div>
                        </div>
                        <div class="priceLine">
                            <div class="priceName"><?= get_post_meta(430,'beton_name2',true) ?></div>
                            <div class="priceCoast"><?= get_post_meta(430,'price2',true) ?></div>
                        </div>
                        <div class="priceLine">
                            <div class="priceName"><?= get_post_meta(430,'beton_name3',true) ?></div>
                            <div class="priceCoast"><?= get_post_meta(430,'price3',true) ?></div>
                        </div>
                        <div class="priceLine">
                            <div class="priceName"><?= get_post_meta(430,'beton_name4',true) ?></div>
                            <div class="priceCoast"><?= get_post_meta(430,'price4',true) ?></div>
                        </div>
                    </div>
                    <div class="wrapLinkPrice">
                        <a href="<?= $_SERVER['SCRIPT_URI'] ?>beton" title="Все виды бетона" class="linkStyle">Все виды бетона</a>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/images/propose/car.png" alt="car" class="imageBlockPropose"/>
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/images/propose/proposeBackground.png" alt="car" class="proposeBakgroundImage"/>
    </section>
    <!--Sidebar Page-->
    <section class="sectionAboutUs">
        <div class="wrapperAboutUs">
            <div class="titleClass">О нас</div>
            <div class="blockIndex">
                <p>ООО «ТАВРИДА БЕТОН» - торгово-производственная компания, специализирующаяся на производстве и поставках
                    строительных, архитектурных бетонных и растворных смесей. Предприятие работает на строительном рынке с
                    2017г. Инициаторами создания выступили люди, имеющие многолетний опыт работы в строительстве и
                    производстве бетонных смесей. С момента основания
                    нашей компании, мы пошагово выработали стратегию развития нашего
                    производства, понимая, что для успешной работы в жесткой конкурентной
                    среде необходимо постоянно предпринимать усилия к тому, чтобы качество
                    нашей работы росло благодаря совершенствованию технологии,
                    оборудования и самоотверженному труду опытного, квалифицированного,
                    сплоченного коллектива.
                </p>
                <p>Нашей компании удалось создать и применить в строительном комплексе
                    России тяжелые бетоны марки В-60(М800); В-80(М1000); В-100(М1200), с
                    применением модификаторов, которые позволяют возводить здания и
                    сооружения высотой более 380 метров. Учитывая будущее развитие береговой
                    инфраструктуры Южного побережья Крыма, мы имеем большой опыт
                    изготовления бетонов для мостовых конструкций, а так же гидротехнических
                    бетонных смесей для укладки их в агрессивной морской среде.
                    При этом нашим будущим потенциальным партнерам всегда нужно
                    учитывать применение на своих объектах только качественной бетонной продукции.
                    Долговечность бетонных конструкций определяется их морозостойкостью,
                    заданной прочностью и водонепроницаемостью.
                    Этого можно достичь только при использовании качественных инертных
                    материалов (щебень, песок, цемент, добавки). Все попытки сэкономить на
                    качестве этих составляющих необратимо ведут к ухудшению параметров
                    бетонных смесей и в последствии к преждевременному разрушению
                    конструкций из поставленного бетона, несмотря на сиюминутную выгоду от
                    его низкой стоимости.
                </p>
            </div>
            <div class="wrapLinkPrice">
                <a href="<?= $_SERVER['SCRIPT_URI'] ?>beton" title="Все виды бетона" class="linkStyle">Подробнее</a>
            </div>
        </div>

    </section>
<section class="gallerySection">
   <?= do_shortcode('[rev_slider alias="gallerySlider"]');?>
</section>
    <section class="partnersSection">
        <div class="wrapperPartners">
            <div class="titleClass">партнеры</div>
            <?= do_shortcode('[rev_slider alias="sliderPartners"]');?>
        </div>
    </section>
<div class="container">
    <div class="titleClass mb0">Мы на карте</div>
</div>
<div class="mapIndex">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6768.022268447603!2d34.138106507301146!3d44.502804320401545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4094c91ccc1881b3%3A0xe9565561681483da!2zNiDRg9C7LiDQlNCw0YDRgdCw0L3QvtCy0YHQutCw0Y8sINCv0LvRgtCw!5e0!3m2!1sru!2sua!4v1505627635092" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
    <script type="text/javascript" src="<?= $_SERVER['SCRIPT_URI'] . 'wp-content/themes/industries/js/myScripts.js' ?>"></script>
<?php get_footer(); ?>