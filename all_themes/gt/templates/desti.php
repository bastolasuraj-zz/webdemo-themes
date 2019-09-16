<?php
/*
Template Name: Destination
Template Post Type: destinations, tours, treks
*/
get_header();
while ( have_posts() ) {
	the_post();

	?>

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="img/sub_header_list_museum_in.jpg"
             data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <div id="animate_intro">
                <h1>Enjoy <?php the_title() ?></h1>
                <p>"<?php the_field( 'post_subtitle' ); ?>"</p>

            </div>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <section class="wrapper">
        <div class="divider_border"></div>

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="owl-carousel add_bottom_15 owl-theme owl-responsive-1000 owl-loaded">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2250px;">


								<?php

								// check if the repeater field has rows of data
								if ( have_rows( 'desti_images_repeater' ) ):
									$sn = 1;
									// loop through the rows of data
									while ( have_rows( 'desti_images_repeater' ) ) : the_row();
										?>
                                        <div class="owl-item" style="width: 750px; margin-right: 0px;">
                                            <div class="item"><img src="<?php the_sub_field( 'desti_images' ); ?>"
                                                                   alt="">
                                            </div>
                                        </div>
										<?php
										// display a sub field value

										$sn ++;
									endwhile;

								else :

									// no rows found

								endif;

								?>

                            </div>
                        </div>
                        <div class="owl-controls">
                            <div class="owl-nav">
                                <div class="owl-prev" style="display: none;"></div>
                                <div class="owl-next" style="display: none;"></div>
                            </div>
                            <div style="" class="owl-dots">
                                <div class="owl-dot active"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                            </div>
                        </div>
                    </div>

                    <!--                    <div class="owl-carousel add_bottom_15">-->
                    <!--						--><?php
					//
					//						// check if the repeater field has rows of data
					//						if ( have_rows( 'desti_images_repeater' ) ):
					//
					//							// loop through the rows of data
					//							while ( have_rows( 'desti_images_repeater' ) ) : the_row();
					//								?>
                    <!--                                <div class="item"><img src="-->
					<?php //the_sub_field( 'desti_images' ); ?><!--" alt="">-->
                    <!--                                </div>-->
                    <!--							--><?php
					//								// display a sub field value
					//
					//
					//							endwhile;
					//
					//						else :
					//
					//							// no rows found
					//
					//						endif;
					//
					//						?>
                    <!---->
                    <!--                    </div>-->

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Overview</a>
                        </li>
                        <li><a href="#tab_2" data-toggle="tab">Itinerary</a>
                        </li>
                        <li><a href="#tab_3" data-toggle="tab">Map</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab_1">

                            <p> <?php the_content(); ?>
                            </p>
                            <div class="row">
								<?php

								// check if the repeater field has rows of data
								if ( have_rows( 'overview_repeater' ) ):

									// loop through the rows of data
									while ( have_rows( 'overview_repeater' ) ) : the_row();
										?>
                                        <div class="col-md-6">
                                            <div class="feature-box">
                                                <div class="feature-box-icon">
                                                    <i class="icon-ok-4"></i>
                                                </div>
                                                <div class="feature-box-info">
                                                    <h4><?php the_sub_field( 'overview_title' ); ?></h4>
                                                    <p>
														<?php the_sub_field( 'overview_description' ); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
									<?php
										// display a sub field value


									endwhile;

								else :

									// no rows found

								endif;

								?>

                                <!-- End col -->
                            </div>
                            <!-- End row -->

                            <hr>

                        </div>
                        <!-- End tab_1 -->

                        <div class="tab-pane fade" id="tab_2">

                            <ul class="cbp_tmtimeline">
								<?php

								// check if the repeater field has rows of data
								if ( have_rows( 'itenerary_repeater' ) ):

									// loop through the rows of data
									$sn = 1;
									while ( have_rows( 'itenerary_repeater' ) ) : the_row();
										?>
                                        <li>
                                            <time class="cbp_tmtime"
                                                  datetime="<?php the_sub_field( 'itenerary_time' ); ?>">
                                                <span><?php the_sub_field( 'itenerary_estimated_duration' ); ?>.</span><span><?php the_sub_field( 'itenerary_time' ); ?></span>
                                            </time>
                                            <div class="cbp_tmicon">
												<?= $sn ?>
                                            </div>
                                            <div class="cbp_tmlabel">
                                                <div class="hidden-xs">
                                                    <img src="<?php the_sub_field( 'itenerary_image' ); ?>" alt=""
                                                         class="img-circle thumb_visit">
                                                </div>
                                                <h4><?php the_sub_field( 'itenerary_title' ); ?></h4>
                                                <p>
													<?php the_sub_field( 'itenerary_description' ); ?>
                                                </p>
                                            </div>
                                        </li>
										<?php
										// display a sub field value

										$sn ++;
									endwhile;

								else :

									// no rows found
									echo 'Sorry, no iteneraries for this plan. YET.';

								endif;

								?>
                            </ul>

                        </div>
                        <!-- End tab_2 -->

                        <div class="tab-pane fade" id="tab_3">

                            <!-- end map-->
							<?php

							// check if the repeater field has rows of data
							if ( have_rows( 'travel_options' ) ):

								// loop through the rows of data
								$sn = 1;
								while ( have_rows( 'travel_options' ) ) : the_row();
									?>
                                    <div class="box_map">
                                        <i class="icon_set_1_icon-25"></i>
                                        <h4> <?php the_sub_field( 'travel_by' ); ?></h4>
                                        <p> <?php the_sub_field( 'travel_by_description' ); ?></p>
                                    </div>

									<?php
									// display a sub field value

									$sn ++;
								endwhile;

							else :

								// no rows found
								echo 'Sorry, no iteneraries for this plan. YET.';

							endif;

							?>
                        </div>
                        <!-- End tab_3 -->
                    </div>
                    <!-- End tabs -->
                </div>
                <!-- End Col -->
                <aside class="col-md-4">
                    <div class="box_style_1">
                        <div class="price">
                            <strong>$<?php the_field( 'cost_per_person' ); ?></strong><small>per person</small>
                        </div>
                        <ul class="list_ok">
							<?php

							// check if the repeater field has rows of data
							if ( have_rows( 'cd_repeater' ) ):

								// loop through the rows of data
								$sn = 1;
								while ( have_rows( 'cd_repeater' ) ) : the_row();
									?>
                                    <li><?php the_sub_field( 'cd_services' ); ?></li>
									<?php
									// display a sub field value

									$sn ++;
								endwhile;

							else :

								// no rows found
								echo 'Sorry, no items for this plan. YET.';

							endif;

							?>
                        </ul>
                        <!--                        <small>*Free for childs under 8 years old</small>-->
                    </div>
                    <div class="box_style_2">
                        <h3>Book Your Tour<span>Free service - Confirmed immediately</span></h3>
                        <div id="message-booking"></div>
<!--                        <form method="post" action="assets/check_avail.php" id="check_avail" autocomplete="off">-->
							<?php echo do_shortcode( '[contact-form-7 id="134" title="Book Now"]' ) ?>
<!--                        </form>-->
                        <hr>
                        <a href="#0" class="btn_outline"> or Contact us</a>
                        <a href="tel://004542344599" id="phone_2"><i class="icon_set_1_icon-91"></i>+45 423 445 99</a>

                    </div>
                </aside>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- End section -->
	<?php
}
get_footer();