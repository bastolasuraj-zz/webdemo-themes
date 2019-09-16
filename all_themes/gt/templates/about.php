<?php
/*
 Template Name: About
 */
get_header();
?>

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="img/sub_header_about.jpg"
             data-natural-width="1400" data-natural-height="470">
        <div id="sub_content_in">
            <div id="animate_intro">
                <h1>About Gaama Travels</h1>
                <p>"Usu habeo equidem sanctus no ex melius labitur conceptam eos"</p>
            </div>
        </div>
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <section class="wrapper">
        <div class="divider_border"></div>

        <div class="container">
            <div class="main_title">
                <h2>Some <span>Gaama Travels</span> info</h2>
                <p><?php the_field( 'some_gaama_travels_info_subtitle' ); ?></p>
            </div>

            <div class="row">
                <div class="col-sm-6">

					<?php

					// check if the repeater field has rows of data
					if ( have_rows( 'sgti_info' ) ):
						$sn = 1;
						// loop through the rows of data
						while ( have_rows( 'sgti_info' ) ) :
							the_row();
							?>
                            <h4><?php the_sub_field( 'sgti_title' ); ?></h4>
                            <p><?php the_sub_field( 'sgti_description' ); ?></p>

							<?php
							// display a sub field value

							$sn ++;
						endwhile;

					else :

						// no rows found

					endif;

					?>
                </div>
                <div class="col-sm-6">
                    <p class="advertise"><img src="<?php the_field( 'sgti_image' ); ?>" alt="" class="img-responsive">
                    </p>
                </div>
            </div>
            <!-- End row -->
            <hr>

            <div class="main_title_2">
                <h3>Our <span>features</span></h3>
                <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
            </div>
            <div class="row">

				<?php

				// check if the repeater field has rows of data
				if ( have_rows( 'of_features' ) ):
					$sn = 1;
					// loop through the rows of data
					while ( have_rows( 'of_features' ) ) : the_row();
						?>
                        <div class="col-sm-6">
                            <div class="box_features">
                                <i class="<?php the_sub_field( 'of_image' ); ?>"></i>
                                <h4></h4>
                                <p><?php the_sub_field( 'of_description' ); ?></p>
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

            <!-- End row -->

            <hr>


        </div>
        <!-- End container -->
    </section>
    <!-- End section -->

    <div class="container margin_60">


    </div>
    <!-- end banner -->
    </div>
    <!-- end container -->
<?php
get_footer();