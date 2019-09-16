<?php
/*
 * Template Name: About
 */
get_header();
?>
    <!--======= OFFER SERVICES =========-->

    <section class="offer-services">
        <div class="container">
            <!--======= TITTLE =========-->
            <div class="tittle">
                <h2>welcome to Need Employment Services</h2>
            </div>
            <div class="row">


                <!--======= NAV TABS CONTENT =========-->
                <div class="col-sm-12">
                    <div class="tab-content">

                        <!--======= HandyMan Repairs =========-->
                        <div role="tabpanel" class="tab-pane animated fadeIn active" id="plumb">
                            <div class="row">
								<?php
								while ( have_posts() ):
									the_post();
									?>
                                    <div class="col-sm-7 about">
										<?php the_content(); ?>
                                    </div>
                                    <div class="col-sm-5">
										<?php
										$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
										?>
                                        <img class="img-responsive img-up animated fadeInRight"
                                             src="<?php echo $large_image_url[0]; ?>" alt="">
                                    </div>
								<?php
								endwhile;
								?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

<?php
get_footer();