<?php
/*
 Template Name: Homepage 
 */
get_header();
?>
    <div id="full-slider-wrapper">
        <div id="layerslider" style="width:100%;height:600px;">
            <!-- first slide -->
            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
                <img src="<?php echo get_template_directory_uri()?>/img/slides/slide_2.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">More than 100 tours available</h3>
                <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    Historic Buildings - Attractions - Museums
                </p>

            </div>
            <!-- second slide -->
            <div class="ls-slide" data-ls="slidedelay:5000; transition2d:103;">
                <img src="<?php echo get_template_directory_uri()?>/img/slides/slide_3.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top: 45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Discover Fantastic Places</h3>
                <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    We offer a variety of services and options
                </p>

            </div>
            <!-- third slide -->
            <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
                <img src="<?php echo get_template_directory_uri()?>/img/slides/slide_1.jpg" class="ls-bg" alt="Slide background">
                <h3 class="ls-l slide_typo" style="top:45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Enjoy a Lovely Tour</h3>
                <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
                    Buildings - Attractions - Museums
                </p>

            </div>
        </div>
    </div>

<!--				--><?php //if ( have_rows( 'slider_images_repeater' ) ): $i = 1; ?>
<!--					--><?php //$sn = 1; ?>
<!--					--><?php //while ( have_rows( 'slider_images_repeater' ) ): the_row(); ?>
<!---->
<!--
<!                        <div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">-->
<!--                            <img src="--><?php //the_sub_field('slider_images');?><!--" class="ls-bg" alt="Slide background">-->
<!--                            <h3 class="ls-l slide_typo" style="top:45%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">Enjoy a Lovely Tour</h3>-->
<!--                            <p class="ls-l slide_typo_2" style="top:55%; left:50%;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">-->
<!--                                Buildings - Attractions - Museums-->
<!--                            </p>-->
<!---->
<!--                        </div>-->
<!---->
<!---->
<!--						--><?php //$sn ++; endwhile; endif; ?>


    <section class="container margin_60">
        <div class="main_title">
            <h3><?php the_field( 'about_title' ); ?></h3>
            <p><?php the_field( 'about_description' ); ?></p>
        </div>

        <!-- End Row -->
    </section>


    <section class="container margin_60">
        <div class="main_title">
            <h3>Why choose Gaama Travels</h3>
            <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
        </div>
        <div class="row">
			<?php

			// check if the repeater field has rows of data
			if ( have_rows( 'why_choose' ) ):
				$sn = 1;
				// loop through the rows of data
				while ( have_rows( 'why_choose' ) ) : the_row();
					?>
                    <div class="col-sm-4">
                        <div class="box_how">
                            <div class="icon_how"><span class="icon_set_1_icon-92"></span>
                            </div>
                            <h4><?php the_sub_field( 'why_choose_title' ); ?></h4>
                            <p><?php the_sub_field( 'why_choose_description' ); ?></p>
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
        <!-- End Row -->
    </section>
    <!-- End Container -->

    <section class="promo_full">
        <div class="promo_full_wp">
            <div>
                <h3>What Clients say<span>Id tale utinam ius, an mei omnium recusabo iracundia.</span></h3>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="carousel_testimonials">
                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class="comment">
                                            "Mea ad postea meliore fuisset. Timeam repudiare id eum, ex paulo dictas
                                            elaboraret sed, mel cu unum nostrud."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class="comment">
                                            "No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea
                                            dicant diceret ocurreret."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                                <div>
                                    <div class="box_overlay">
                                        <div class="pic">
                                            <figure><img src="img/testimonial_1.jpg" alt="" class="img-circle">
                                            </figure>
                                            <h4>Roberta<small>12 October 2015</small></h4>
                                        </div>
                                        <div class="comment">
                                            "No nam indoctum accommodare, vix ei discere civibus philosophia. Vis ea
                                            dicant diceret ocurreret."
                                        </div>
                                    </div>
                                    <!-- End box_overlay -->
                                </div>

                            </div>
                            <!-- End carousel_testimonials -->
                        </div>
                        <!-- End col-md-8 -->
                    </div>
                    <!-- End row -->
                </div>
                <!-- End container -->
            </div>
            <!-- End promo_full_wp -->
        </div>
        <!-- End promo_full -->
    </section>
    <!-- End section -->
<?php
get_footer();