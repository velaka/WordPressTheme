<?php
    get_header();
?>

<div class="container no-padding">
        <!-- === BEGIN CONTENT === -->
        <div class="row">
            <!-- Carousel Slideshow -->
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <!-- Carousel Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example" data-slide-to="1"></li>
                </ol>
                <!-- End Carousel Indicators -->
                <!-- Carousel Images -->
                <div class="carousel-inner">                    
                    <div class="item active">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/2image.jpg">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/3image.jpg">
                    </div>
                </div>
                <!-- End Carousel Images -->
                <!-- Carousel Controls -->
                <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                <!-- End Carousel Controls -->
            </div>
            <!-- End Carousel Slideshow -->
            <!-- Tabs -->
            <div class="tabs-dark" style="padding:0;">
                <!-- Tab Navigation -->
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#ykrasa" data-toggle="tab">Украса</a>
                    </li>
                    <li>
                        <a href="#tarjestwo" data-toggle="tab">Тържества</a>
                    </li>
                    <li>
                        <a href="#aksesoari" data-toggle="tab">Аксесоари</a>
                    </li>
                </ul>
                <!-- End Tab Navigation -->
                <!-- Tab Panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="ykrasa">
                        <img style="float: left;width: 300px;height: 165px;  margin-right: 25px; margin-bottom: 10px;" src="<?php bloginfo('template_directory'); ?>/assets/img/frontpage/filler1.jpg" alt="filler image">
                        <h3>Сватбена украса</h3>
                        <p>Украсата на всяко едно сватбено тържество внася стил, изисканост и индивидуалност.Ние можем да я направим по ваша представа и идеи или да се доверите на нашия професионализъм. За целта може да се възползвате от нашите промоционални пакетни цени за украса или да направите свой пакет от богатия ни асортимент на арки, икебани, завеси, калъфи за столове, украси за кола, различни видове стойки и римски колони, сватбена украса за масите, платове, балони, декорации и други.</p>
                    </div>
                    <div class="tab-pane fade" id="tarjestwo">
                        <img style="float: left;width: 300px;height: 165px; margin-right: 25px; margin-bottom: 10px;" src="<?php bloginfo('template_directory'); ?>/assets/img/frontpage/filler2.jpg" alt="filler image">
                        <h3>Тържества</h3>
                        <p>
                        "Virtuoso" ще Ви помогне при избора на DJ, фото и видеооператор и аниматори. Агенцията работи с доказани професионалисти в тези области.Ние предлагаме богат избор от събития, които организираме - сватби,кръщенета, рождени дни за малки и големи, фирмени партита и коктейли,кетъринг и тииймбилдинг.За целта може да се възползвате от нашите промоционални пакетни цени. Изборът на клиента става след задължителна лична среща и преглед на техни материали.

                        </p>
                    </div>
                    <div class="tab-pane fade" id="aksesoari">
                        <img style="float: left; width: 300px;height: 165px; margin-right: 25px; margin-bottom: 10px;" src="<?php bloginfo('template_directory'); ?>/assets/img/aksesoari1.jpg" alt="filler image">
                        <h3>Сватбени аксесоари</h3>
                        <p>Ръчно изработените сватбени аксесоари на агенция “Virtuoso” са неограничена възможност за персонализация на Вашето тържество. Стремежът към “нещо различно”, желанието да удивите и уважите гостите си могат да се изразят чрез направените специално за Вас детайли и акценти. Доверете ни се и ще видите, че всичко в една сватба може да има собствена индивидуалност, стил и характер и да подчертае Вашия вкус.</p>
                    </div>
                </div>
                <!-- End Tab Panes -->
            </div>
            <!-- End Tabs -->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Main Article -->
            <div class="col-md-12 margin-top-30">
                <h2 class="item-title">
                    Сватбена агенция
                </h2>
                <p>
                    <img class="animate fadeInRight" style="float: right;" src="<?php bloginfo('template_directory'); ?>/assets/img/frontpage//responsive_screens.png" alt="responsive screens">- Има ли идеални сватби?
- Да!
- Кой ги прави?
- Талантливите хора от сватбена агенция “Свят за двама”!

Не може да има две еднакви сватби – всяка има своя характер, цвят, настроение, аромат, колорит и емоция. Това може да се улови от хора, чийто адреналин е качен, колкото Вашия и чиято енергия е на една и съща честота с Вашата. Още не Ви познаваме достатъчно, но срещата ни не е случайна. Доверете ни Вашето най-съкровенно събитие и ние от сватбена агенция „Свят за двама“ ще усетим всеки нюанс от него и ще го претворим в реалност.

ТЯ е булка, ТОЙ – младоженец! В деня на сватбата им цялата Вселена е на тяхна страна и работи за тях, бележейки с най-великото чувство на любов техния свят – СВЯТ ЗА ДВАМА!.
                </p>
            </div>
            <div class="col-md-11">
            <div class="blog-post">
            <?php query_posts('showposts=3'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- Blog Item Header -->
                <div class="blog-item-header">
                <!-- Date -->
                    <div class="blog-post-date pull-left">
                        <span class="day"><?php the_date('d'); ?></span>
                        <span class="month"><?php the_date('M'); ?></span>
                    </div>
                    <!-- End Date -->
                    <!-- Title -->
                    <h2>
                        <a href="<?php the_permalink();?>">
                            <?php the_title(); ?></a>
                    </h2>
                    <!-- End Title -->
                    
                </div>
                <!-- End Blog Item Header -->
                <!-- Blog Item Body -->
                <div class="blog">
                    <div class="clearfix"></div>
                    <div class="blog-post-body row margin-top-15">
                        <div class="col-md-5">
                            <img class="pull-left" src="<?php bloginfo('template_directory'); ?>/assets/img/3image.jpg" alt="thumb1">
                        </div>
                        <div class="col-md-7">
                            <p><?php echo the_content(); ?></p>
                        </div>
                    </div>
                    <div class="blog-item-footer">
                        <div class="row">
                            <div class="col-md-10">
                                <hr>
                            </div>
                            <div class="col-md-2">
                                <!-- Read More -->
                                <div class="blog-post-details-item blog-post-details-item-right pull-right">
                                    <a href="<?php the_permalink();?>" class="btn btn-primary">
                                        Read More
                                        <i class="icon-chevron-right readmore-icon"></i>
                                    </a>
                                </div>
                                <!-- End Read More -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                    endif;
                ?>
            </div>
            </div>  
            <div class="clearfix"></div>
            <!-- End Main Article -->
        </div>
    </div>
    <div class="container no-padding gridgallery">
        <!-- Portfolio Header Text -->

        <?php if(!dynamic_sidebar('right-sidebar')): ?>

        <div class="row">
            <div class="col-md-12 padding-vert-30">
                <h2 class="subtitle text-center">Defining Style for the Joomla Based Website of Today</h2>
                <h3 class="subtitle text-center">Fiant tation qui fiant lius nisl. Est nam eros videntur eros at.</h3>
            </div>
        </div>
        <!-- End Portfolio Header Text -->
        <!-- Portfolio Images -->
        <div class="portfolio-group">
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image1.jpg" alt="image1">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image2.jpg" alt="image2">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image3.jpg" alt="image3">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image4.jpg" alt="image4">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image5.jpg" alt="image5">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image6.jpg" alt="image6">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image7.jpg" alt="image7">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <!-- Portfolio Item -->
            <div class="portfolio-item col-md-3 col-sm-6 col-xs-6 animate fadeInUp">
                <div class="image-hover">
                    <a href="#">
                        <figure>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/img/portfolio/image8.jpg" alt="image8">
                            <figcaption>
                                <h3>Quam putamus</h3>
                                <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam.</span>
                            </figcaption>
                        </figure>
                    </a>
                </div>
            </div>



            <!-- //Portfolio Item// -->
            <div class="clearfix"></div>
        </div>
        <!-- End Portfolio Images -->
        <!-- Portfolio Footer Text -->
        <div class="row">
            <div class="col-12-md">
                <p class="text-center padding-bottom-30" style="max-width:690px; margin:0 auto;">Mirum est notare quam littera gothica, quam nunc putamus. Cras non sem sem, at eleifend mi. Vivamus sit amet ante est, sit amet rutrum augue. Cras non sem sem, at eleifend mi. Nam liber tempor cum soluta nobis eleifend
                    option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
            </div>
        </div>

        <?php endif;?>
    </div> 

    
<?php
    get_footer();
?>