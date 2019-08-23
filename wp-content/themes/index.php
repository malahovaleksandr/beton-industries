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
    <div class="inner-banner has-base-color-overlay text-center" <?php if($bg):?>style="background-image:url('<?php echo esc_attr($bg)?>');"<?php endif;?>>
        <div class="container">
            <div class="box">
                <h3><?php if($title) echo wp_kses_post($title); else esc_html_e('Таврида-бетон', 'industries');?></h3>
            </div><!-- /.box -->
        </div><!-- /.container -->
    </div>
    
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
            <div class="rw">
<!--                <div class="--><?php //echo esc_attr($classes);?><!--добавляются стили бутстрапа для ширины записей.задается где то в админке-->
                <div class="col-sm-12">
                    <div class="blockIndex">
                        <p>ООО «ТАВРИДА БЕТОН» - торгово-производственная компания, специализирующаяся на производстве и поставках строительных, архитектурных бетонных и растворных смесей. Предприятие работает на строительном рынке с 2017г. Инициаторами создания выступили люди, имеющие многолетний опыт работы в строительстве и производстве бетонных смесей. С момента основания
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
                        учитывать применение на своих объектах только качественной бетонной
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
                    <!--Blog Post-->
                    <div class="thm-unit-tst">
					<?php while( have_posts() ): the_post();?>
                        <!-- blog post item -->
                        <!-- Post -->
                        <div id="post-<?php the_ID(); ?>" <?php post_class();?>>
                            <?php get_template_part( 'blog' ); ?>
                        <!-- blog post item -->
                        </div><!-- End Post -->
                    <?php endwhile;?>
                    </div>
                    <!--Pagination-->
                    <div class="page_pagination">
                        <?php industries_the_pagination(); ?>
                    </div>
                </div>
                <!--Content Side-->

<!--                 sidebar area -->
<!--                                --><?php //if( $layout == 'right' ): ?>
<!--                                --><?php //if ( is_active_sidebar( $sidebar ) ) { ?>
<!--                                <div class="col-md-3 col-sm-12 col-xs-12 sidebar_styleTwo">-->
<!--                                    <div class="wrapper">-->
<!--                                        --><?php //dynamic_sidebar( $sidebar ); ?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                                --><?php //} ?>
<!--                                --><?php //endif; ?>
<!--                Sidebar-->
            </div>
        </div>
    </section>
<div class="mapIndex">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6768.022268447603!2d34.138106507301146!3d44.502804320401545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4094c91ccc1881b3%3A0xe9565561681483da!2zNiDRg9C7LiDQlNCw0YDRgdCw0L3QvtCy0YHQutCw0Y8sINCv0LvRgtCw!5e0!3m2!1sru!2sua!4v1505627635092" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php get_footer(); ?>