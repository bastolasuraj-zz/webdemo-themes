<?php

get_header();
global $product;

?>

    <div class="body-content outer-top-vs" id="top-banner-and-menu">
    <div class="container">
    <div class="row">
		<?php get_sidebar(); ?>
        <div class="body-content outer-top-xs">
            <div class='container'>
                <div class='row single-product'>
                    <!-- /.sidebar -->
                    <div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
                        <div class="detail-block">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 gallery-holder">
                                    <div class="product-item-holder size-big single-product-gallery small-gallery">

                                        <div id="owl-single-product">

											<?php if ( has_post_thumbnail( $product->get_id() ) ) {
												$attachment_ids[0] = get_post_thumbnail_id( $product->get_id() );
												$attachment        = wp_get_attachment_image_src( $attachment_ids[0], 'full' ); ?>
                                                <div class="single-product-gallery-item" id="slide0">
                                                    <a data-lightbox="image-1" data-title="<?php the_title(); ?>"
                                                       href="<?php echo $attachment[0]; ?>">
                                                        <img data-echo="<?php echo $attachment[0]; ?>"
                                                             class="img-responsive" alt="<?php the_title(); ?>"
                                                             src="assets/images/blank.gif"/>
                                                    </a>
                                                </div>
												<?php

												$images = get_field( 'product_image_gallery' );
												$size   = 'full'; // (thumbnail, medium, large, full or custom size)
												$sn     = 1;
												if ( $images ) : ?>
													<?php foreach ( $images as $image ) :
														$abc = $image['url']
														?>
                                                        <div class="single-product-gallery-item"
                                                             id="slide<?php echo $sn; ?>">
                                                            <a data-lightbox="image-1"
                                                               data-title="<?php the_title(); ?>"
                                                               href="<?php echo $abc; ?>">
                                                                <img class="img-responsive" alt="<?php the_title(); ?>"
                                                                     src="assets/images/blank.gif"
                                                                     data-echo="<?php echo $abc; ?>"/>
                                                            </a>
                                                        </div><!-- /.single-product-gallery-item -->
														<?php $sn ++; endforeach; ?>
												<?php endif; ?>
											<?php } ?>

                                        </div><!-- /.single-product-slider -->


                                        <div class="single-product-gallery-thumbs gallery-thumbs">

                                            <div id="owl-single-product-thumbnails">

												<?php if ( has_post_thumbnail( $product->get_id() ) ) {
													$attachment_ids[0] = get_post_thumbnail_id( $product->get_id() );
													$attachment        = wp_get_attachment_image_src( $attachment_ids[0], 'full' ); ?>
                                                    <div class="item">
                                                        <a class="horizontal-thumb active"
                                                           data-target="#owl-single-product" data-slide="0"
                                                           href="#slide0">
                                                            <img class="img-responsive" alt=""
                                                                 src="assets/images/blank.gif"
                                                                 data-echo="<?php echo $attachment[0]; ?>"/>
                                                        </a>
                                                    </div>
													<?php
													$images = get_field( 'product_image_gallery' );
													$size   = 'full'; // (thumbnail, medium, large, full or custom size)
													$sn     = 1;
													if ( $images ) : ?>
														<?php foreach ( $images as $image ) :
															$abc = $image['url']
															?>
                                                            <div class="item">
                                                                <a class="horizontal-thumb"
                                                                   data-target="#owl-single-product"
                                                                   data-slide="<?php echo $sn; ?>"
                                                                   href="#slide<?php echo $sn; ?>">
                                                                    <!--											                                --><?php //echo $abc;
																	?>
                                                                    <img class="img-responsive" alt=""
                                                                         src="<?php echo $abc; ?>">
                                                                </a>
                                                            </div>
															<?php $sn ++; endforeach; ?>
													<?php endif; ?>
													<?php
												}
												?>

                                            </div><!-- /#owl-single-product-thumbnails -->


                                        </div><!-- /.gallery-thumbs -->

                                    </div><!-- /.single-product-gallery -->
                                </div><!-- /.gallery-holder -->
                                <div class='col-sm-12 col-md-8 col-lg-7 product-info-block'>
                                    <div class="product-info">
										<?php
										echo wp_get_attachment_url( $product->get_gallery_image_ids() );
										?>
                                        <h1 class="name"><?php echo $product->get_name(); ?></h1>
                                        <div class="rating-reviews m-t-20">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <!--                                                    <div class="pull-left">-->
                                                    <!-- <div class="rating rateit-small"></div> -->
                                                    <!--                                                    </div>-->
                                                    <!--                                                    <div class="pull-left">-->
                                                    <!--														--><?php
													//														$average          = $product->get_average_rating();
													//														$percentagerating = $average / 5 * 100;
													//														?>
                                                    <!--                                                        <div class="star-rating" role="img" aria-label="a">-->
                                                    <!--                                                            <span style="color:#FFC808; width:--><?php //echo $percentagerating; ?>
                                                    <!--                                                                    %">-->
                                                    <!--                                                                Rated-->
                                                    <!--                                                                <strong class="rating rateit">4.00-->
                                                    <!--                                                                    <button id="rateit-reset-2" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-2" style="display: none;"></button>-->
                                                    <!--                                                                    <span id="rateit-range-2" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-2" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" style="width: 90px; height: 33.5px;" aria-readonly="true">-->
                                                    <!--                                                                        <span class="rateit-selected" style="height: 33.5px; width: 76px;"></span>-->
                                                    <!--                                                                        <span class="rateit-hover" style="height: 33.5px;"></span>-->
                                                    <!--                                                                    </span>-->
                                                    <!--                                                                </strong> out of 5-->
                                                    <!--                                                            </span>-->
                                                    <!--                                                        </div>-->
                                                    <!--                                                        <div class="reviews">-->
                                                    <!--                                                            <span class="lnk">(-->
													<?php //echo $product->get_review_count(); ?><!-- Reviews)</span>-->
                                                    <!--                                                        </div>-->
                                                    <!--                                                    </div>-->
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.rating-reviews -->
                                        <div class="stock-container info-container m-t-10">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pull-left">
                                                        <div class="stock-box">
                                                            <span class="label">Availability :</span>
                                                        </div>
                                                    </div>
                                                    <div class="pull-left">
                                                        <div class="stock-box">
                                                                <span class="value"><?php $stock_status = $product->get_stock_status();
	                                                                if ( $stock_status == 'instock' ) {
		                                                                echo 'Available';
	                                                                } else {
		                                                                echo 'Out Of Stock';
	                                                                } ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.stock-container -->
                                        <div class="description-container m-t-20">
                                            <p>
												<?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                        <!-- /.description-container -->
                                        <div class="price-container info-container m-t-30">
                                            <div class="row">
												<?php $driver = get_field( 'driver_link' );
												if ( ! empty( $driver ) ) {
													?>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <div class="price-box">
                                                            <button type="submit" class="btn btn-primary">
                                                                <a href="<?php echo $driver; ?>" target="_blank">Download Driver</a>
                                                            </button>
															<?php
															echo custom_price(); ?>
                                                        </div>
                                                    </div>

													<?php
												}
												$brochure = get_field( 'brochure_link' );
												if ( ! empty( $brochure ) ) {
													?>
                                                    <div class="col-sm-6 col-xs-6">
                                                        <div class="price-box">
                                                            <button type="submit" class="btn btn-primary">
                                                                <a href="<?php echo $brochure; ?>" target="_blank">Download Brochure</a>
                                                            </button>
															<?php
															echo custom_price(); ?>
                                                        </div>
                                                    </div>
													<?php
												}
												?>
                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.price-container -->
                                        <div class="quantity-container info-container">
                                            <div class="row">
												<?php if ( $product->has_child() ) : ?>
                                                    <a href="<?php the_permalink(); ?>">
														<?php _e( 'Zobacz dostępne warianty', 'my-theme' ); ?>
                                                    </a>
												<?php elseif ( $product->is_in_stock() ) : ?>
                                                    <!--                                                    <form class="cart" action="--><?php //the_permalink() ?><!--" method="post"-->
                                                    <!--                                                          enctype="multipart/form-data">-->
                                                    <!--                                                        <div class="add-btn">-->
                                                    <!--                                                            <div class="quantity">-->
                                                    <!--                                                                <input type="number" step="1" min="1"-->
                                                    <!--                                                                       max="--><?php //echo $product->get_stock_quantity(); ?><!--"-->
                                                    <!--                                                                       name="quantity" value="1"-->
                                                    <!--                                                                       title="--><?php //_e( 'Szt.', 'my-theme' ); ?><!--"-->
                                                    <!--                                                                       class="input-text qty text" size="4">-->
                                                    <!--                                                            </div>-->
                                                    <!--                                                            <input type="hidden" name="add-to-cart"-->
                                                    <!--                                                                   value="--><?php //echo esc_attr( $product->get_id() ); ?><!--">-->
                                                    <!--                                                            <button type="submit" class="btn btn-primary"><i-->
                                                    <!--                                                                        class="fa fa-shopping-cart inner-right-vs"></i> --><?php //echo $product->single_add_to_cart_text(); ?>
                                                    <!--                                                            </button>-->
                                                    <!--                                                        </div>-->
                                                    <!--                                                    </form>-->
												<?php endif; ?>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.quantity-container -->
                                    </div>
                                    <!-- /.product-info -->
                                </div>
                                <!-- /.col-sm-7 -->
                            </div>
                            <!-- /.row -->
                        </div>

                        <div class="product-tabs inner-bottom-xs">
                            <div class="row">
                                <div class="col-sm-12 col-md-3 col-lg-3">
									<?php
									$tabs = apply_filters( 'woocommerce_product_tabs', array() );

									if ( ! empty( $tabs ) ) : ?>

                                    <div class="woocommerce-tabs wc-tabs-wrapper">
                                        <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                            <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a>
                                            </li>
                                            <li class=""><a data-toggle="tab" href="#review">PRODUCT INQUIRY</a></li>
<!--                                            <li class=""><a data-toggle="tab" href="#tags">TAGS</a></li>-->
                                        </ul>
                                        <!-- /.nav-tabs #product-tabs -->
                                    </div>


                                </div>
                                <div class="col-sm-12 col-md-9 col-lg-9">

                                    <div class="tab-content">

                                        <div id="description" class="tab-pane active">
                                            <div class="product-tab">
												<?php foreach ( $tabs as $key => $tab ) : ?>
                                                    <div id="tab-<?php echo esc_attr( $key ); ?>"
                                                         class="tab-pane in active">

                                                        <div class="tab-content">
                                                            <div class="product-tab">
                                                                <div class="product-reviews">
                                                                    <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab"
                                                                         id="tab-<?php echo esc_attr( $key ); ?>"
                                                                         role="tabpanel"
                                                                         aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
														<?php if ( isset( $tab['callback'] ) ) {
															call_user_func( $tab['callback'], $key, $tab );
														} ?>
                                                        <!-- /.tab-pane -->
                                                    </div>
                                                    <!-- /.tab-content -->
												<?php endforeach; ?>


                                            </div>
                                        </div><!-- /.tab-pane -->

                                        <div id="review" class="tab-pane">
                                            <div class="product-tab">

                                                <div class="product-reviews">
                                                    <h4 class="title">Please Fill out the form below. </h4>
                                                    <?php
                                                    echo do_shortcode('[contact-form-7 id="325" title="Product Inquiry"]')
                                                    ?>
                                                </div><!-- /.product-reviews -->

                                            </div><!-- /.product-tab -->
                                        </div><!-- /.tab-pane -->

                                        <div id="tags" class="tab-pane">
                                            <div class="product-tag">

                                                <h4 class="title">Product Tags</h4>
                                                <form class="form-inline form-cnt">
                                                    <div class="form-container">

                                                        <div class="form-group">
                                                            <label for="exampleInputTag">Add Your Tags: </label>
                                                            <input type="email" id="exampleInputTag"
                                                                   class="form-control txt">


                                                        </div>

                                                        <button class="btn btn-upper btn-primary" type="submit">ADD
                                                            TAGS
                                                        </button>
                                                    </div><!-- /.form-container -->
                                                </form><!-- /.form-cnt -->

                                                <form class="form-inline form-cnt">
                                                    <div class="form-group">
                                                        <label>&nbsp;</label>
                                                        <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                                                    </div>
                                                </form><!-- /.form-cnt -->

                                            </div><!-- /.product-tab -->
                                        </div><!-- /.tab-pane -->

                                    </div><!-- /.tab-content -->
                                </div>

								<?php endif; ?>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.product-tabs -->

                        <!-- ============================================== UPSELL PRODUCTS ============================================== -->

                        <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

                    </div>
                    <!-- /.col -->
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
