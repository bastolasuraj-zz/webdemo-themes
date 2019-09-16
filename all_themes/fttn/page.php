<?php
get_header();
?>
    <div class="body-content outer-top-vs" id="top-banner-and-menu">

    <div class="container">
        <div class="row">
	        <?php get_sidebar(); ?>

            <div class="col-xs-12 col-sm-12 col-md-4 sidebar">

                <!-- ================================== TOP NAVIGATION ================================== -->

                <!-- /.side-menu -->


            </div>
            <div class="blog-page">
                <div class="col-md-9">
                    <div class="blog-post wow fadeInUp">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large'); ?>
                            <img class="img-responsive" src="<?php echo $featured_image[0]; ?>" alt="">
                            <h1><?php the_title() ?></h1>
                            <?php the_content() ?>

                        </div>
                    <?php endwhile;  ?>
                    <!-- ==============================================CATEGORY============================================== -->


                    <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
