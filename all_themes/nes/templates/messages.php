<?php
/*
 * Template Name: MessagesFrom
 */
get_header();

?>
    <section class="offer-services">
        <div class="container">
            <!--======= TITTLE =========-->
            <div class="tittle">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="row">


                <!--======= NAV TABS CONTENT =========-->
                <div class="col-sm-12">
                    <div class="tab-content">

                        <!--======= HandyMan Repairs =========-->
                        <div role="tabpanel" class="tab-pane animated fadeIn active" id="plumb">
							<?php
							while ( have_posts() ):the_post();
								?>
                                <div class="row">
                                    <div class="col-sm-7">
										<?php
										the_content(); ?>
                                    </div>

                                    <div class="col-sm-5 t">
										<?php
										$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
//										print_r($image);
//										die;
										?>
                                        <img class="img-responsive img-up animated fadeInRight"
                                             src="<?php echo $image[0] ?>" alt="">
                                    </div>
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
