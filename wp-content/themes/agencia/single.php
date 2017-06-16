<?php 
	get_header();
?>
<div class="container">
    <div class="row margin-vert-30">
        <!-- Main Column -->
        <div class="col-md-9">            
			<div class="blog-post">
            <?php query_posts('showposts=2'); ?>
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
                </div>
                <?php 
                    endwhile;
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
	get_footer();
?>