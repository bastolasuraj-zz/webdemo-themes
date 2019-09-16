<?php
get_header();
?>
    <div class="body-content outer-top-vs" id="top-banner-and-menu">

    <div class="container">
    <div class="row">
		<?php get_sidebar(); ?>
        <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">

            <!-- ========================================== SECTION – HERO ========================================= -->
            <div class="more-info-tab clearfix ">
				<?php
				global $wp_query;
				$out = $wp_query->found_posts;
				if ( $out > 0 ) {
					?>
                    <h3 class="new-product-title pull-left"><?php echo $out . ' Results Found for "' . $_GET['s'] . '"'; ?></h3>
					<?php
				} else {
					?>
                    <h3 class="new-product-title pull-left"><?php echo 'Search Results'; ?></h3>
					<?php
				}
				?>

                <!-- /.nav-tabs -->
            </div>
            <div class="search-result-container ">
                <div id="myTabContent" class="tab-content category-list">
                    <div class="tab-pane active " id="grid-container">
                        <div class="category-product">
                            <div class="row">
								<?php
								if ( have_posts() ) {

									while ( have_posts() ) :

										the_post(); ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3">
                                            <div class="item">
                                                <div class="products prohome">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="<?php the_permalink(); ?>">
                                                                    <div class="image">

																		<?php if ( has_post_thumbnail( get_the_ID() ) ) {
																			echo get_the_post_thumbnail( get_the_ID() );
																		} else {
																			echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />';
																		} ?>

                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!-- /.image -->
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left p">
                                                            <h3 class="name"><a
                                                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                            </h3>
                                                            <div class="description"></div>
                                                            <div class="product-price">
																<?php
																echo custom_price();
																?>
                                                                <!--<span class="price-before-discount">$ 800</span>-->
                                                            </div>
                                                            <!-- /.product-price -->

                                                        </div>
                                                        <!-- /.product-info -->

                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <!-- /.products -->
                                            </div>
                                        </div>
									<?php endwhile;
									wp_reset_postdata();
								} else {
									?>
                                    <h3 class="new-product-title pull-left"><?php echo ' Nothing Found for "' . $_GET['s'] . '"'; ?></h3>
									<?php
								}
								?>

                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.tab-content -->

                <!-- /.filters-container -->

            </div>
            <!-- /.scroll-tabs -->


        </div>
    </div>
<?php

get_footer();