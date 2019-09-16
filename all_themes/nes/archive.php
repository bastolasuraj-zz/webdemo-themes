<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Need_Employment_Services
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="tittle margin-t-40">
                        <h2><?php the_archive_title( '' ); ?></h2>
                    </div>
					<?php if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
//				get_template_part( 'template-parts/content', get_post_type() );
							?>

                            <div class="col-md-6">
                                <!--======= OFFER SERVICES =========-->

                                <section class="offer-services">
                                    <div class="container">
                                        <!--======= TITTLE =========-->


                                        <div class="row">

                                            <div class="col-md-5 itborder">
                                                <div class="col-md-7"><?php the_title(); ?></div>
                                                <div class="col-md-5 detail text-center" style="color:white"><a
                                                            href="<?php the_permalink(); ?>">View Detail</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>

						<?php


						endwhile;
						?>

					<div class="center-paginate">	<?php echo paginate_links(); ?> </div>

					<?php
//						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
