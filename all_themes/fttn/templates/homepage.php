<?php
/*
Template Name: Homepage
*/
get_header();
?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <?php get_sidebar(); ?>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                <!-- ========================================== SECTION – HERO ========================================= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <?php if (have_rows('sliders')) { ?>
                            <?php while (have_rows('sliders')) { ?>
                                <?php the_row(); ?>
                                <div class="item " style="background-image: url(<?php the_sub_field('slider_image'); ?>);">
                                    <div class="container-fluid">
                                        <div class="caption bg-color vertical-center text-left">
                                            <div class="slider-header fadeInDown-1"><?php the_sub_field('top_text'); ?></div>
                                            <div class="big-text fadeInDown-1"> <?php the_sub_field('title_text'); ?> </div>
                                            <div class="excerpt fadeInDown-2 hidden-xs"> <span><?php the_sub_field('description_text'); ?></span> </div>
                                            <div class="button-holder fadeInDown-3"> <a href="<?php the_sub_field('button_url'); ?>" class="btn-lg btn btn-uppercase btn-primary shop-now-button"><?php the_sub_field('button_text'); ?></a> </div>
                                        </div>
                                        <!-- /.caption -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </div>
                                <!-- /.item prohome -->
                            <?php } ?>
                        <?php } ?>
                    </div>
                    <!-- /.owl-carousel -->
                </div>
                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">New Arrivales</h3>

                        <!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">
                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                                    <!--  -->

                                    <!-- <?php //echo do_shortcode('[recent_products per_page="2" columns="1"]') 
                                            ?> -->

                                    <?php
                                    $args = array('post_type' => 'product', 'stock' => 1, 'posts_per_page' => 6, 'orderby' => 'date', 'order' => 'DESC');
                                    $loop = new WP_Query($args);
                                    while ($loop->have_posts()) : $loop->the_post();
                                        global $product; ?>
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <div class="image">

                                                                <?php if (has_post_thumbnail($loop->post->ID)) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                                                                else echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />'; ?>

                                                            </div>
                                                        </a>
                                                        <!-- /.image -->

                                                        <div class="tag new"><span>new</span></div>
                                                    </div>
                                                    <!-- /.product-image -->
                                                    <div class="product-info text-left">
                                                        <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                        <!-- rating space -->
                                                        <div class="description"></div>
                                                        <div class="product-price">
	                                                        <?php
	                                                        echo custom_price();
	                                                        ?>
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
                                        <!-- /.item -->
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                    <!--  -->
                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- unwanted line of codes -->
                <!-- unwanted line of codes -->
                <!-- Ads -->
                <div class="wide-banners outer-bottom-xs">
                    <div class="row">
                        <!-- aa -->
                        <div class="col-md-4 col-sm-4">
                            <div class="wide-banner cnt-strip">
                                <div class="image"> <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/assets/images/banners/home-banner1.jpg" alt=""> </div>
                            </div>
                            <!-- /.wide-banner -->
                        </div>
                        <!-- aa -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Ads -->
                <div class="more-info-tab clearfix new-prodeuct">
                    <h3 class="new-product-title pull-left">Featured Products</h3>

                    <!-- /.nav-tabs -->
                </div>
                <div class="search-result-container ">
                    <div id="myTabContent" class="tab-content category-list">
                        <div class="tab-pane active " id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    <!-- <?php echo do_shortcode('[featured_products]'); ?> -->
                                    <?php $meta_query  = WC()->query->get_meta_query();
                                    $tax_query   = WC()->query->get_tax_query();
                                    $tax_query[] = array(
                                        'taxonomy' => 'product_visibility',
                                        'field'    => 'name',
                                        'terms'    => 'featured',
                                        'operator' => 'IN',
                                    );

                                    $args = array(
                                        'post_type'           => 'product',
                                        'post_status'         => 'publish',
                                        'posts_per_page'      => 8,
                                        'meta_query'          => $meta_query,
                                        'tax_query'           => $tax_query,
                                    );

                                    $featured_query = new WP_Query($args);

                                    if ($featured_query->have_posts()) {

                                        while ($featured_query->have_posts()) :

                                            $featured_query->the_post();

                                            $product = wc_get_product($featured_query->post->ID); ?>
                                            <div class="col-sm-6 col-md-4 col-lg-3">
                                                <div class="item">
                                                    <div class="products prohome">
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

                                                                <div class="tag hot"><span>hot</span></div>
                                                            </div>
                                                            <!-- /.product-image -->

                                                            <div class="product-info text-left p">
                                                                <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
                                    }
                                    ?>
                                    <!-- /.item -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.category-product -->

                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->

                    <!-- /.filters-container -->

                </div>
                <!-- /.scroll-tabs -->
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->

            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->
                <?php
                get_footer();
