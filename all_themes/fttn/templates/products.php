<?php

/**
 * Template Name: Products
 */
get_header();
// get_sidebar();
?>
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <?php get_sidebar(); ?>

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">

                <!-- ========================================== SECTION – HERO ========================================= -->
                <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">our Products</h3>

                        <!-- /.nav-tabs -->
                    </div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    <!-- <?php echo do_shortcode('[featured_products]'); ?> -->
                                    <?php
                                    $args = array(
                                        'post_type'           => 'product',
                                        'post_status'         => 'publish',
                                        'posts_per_page'      => 16,
                                    );

                                    $featured_query = new WP_Query($args);

                                    if ($featured_query->have_posts()) {

                                        while ($featured_query->have_posts()) :

                                            $featured_query->the_post();

                                            $product = wc_get_product($featured_query->post->ID); ?>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="item prohome">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image">
                                                                    <a href="<?php the_permalink(); ?>">
                                                                        <div class="image">

                                                                            <?php if (has_post_thumbnail($featured_query->post->ID)) echo get_the_post_thumbnail($featured_query->post->ID, 'shop_catalog');
                                                                            else echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />'; ?>

                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <!-- /.image -->

                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left p">
                                                                <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                                <div class="description"></div>
                                                                <div class="product-price"> <span class="price"> <?php echo $product->get_price_html(); ?> </span>
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
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
            <?php
            get_footer();
            
