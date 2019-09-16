<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Need_Employment_Services
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				?>
                <section class="offer-services">
                    <div class="container">
                        <!--======= TITTLE =========-->
                        <div class="tittle">
                            <h2><?php the_title();?></h2>
                        </div>
                        <div class="row">


                            <!--======= NAV TABS CONTENT =========-->
                            <div class="col-sm-12">
                                <div class="tab-content">

                                    <!--======= HandyMan Repairs =========-->
                                    <div role="tabpanel" class="tab-pane animated fadeIn active" id="plumb">
                                        <div class="row">
                                            <div class="col-sm-12">
	                                            <?php
	                                            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	                                            ?>
                                                <img class="img-responsive tt img-up animated fadeInRight"
                                                     src="<?php echo $large_image_url[0];?>" alt="">

                                            </div>
                                            <div class="col-sm-12 about">
                                                <?php
                                                the_content();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
			<?php

			endwhile; // End of the loop.
			?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
