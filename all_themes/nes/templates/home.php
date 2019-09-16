<?php
/*
 * Template Name: Homepage
 */
get_header(); ?>

    <!--======= BANNER =========-->
    <div id="banner">
        <div class="flex-banner">
            <ul class="slides">
				<?php
				if ( have_rows( 'slides' ) ) {
					while ( have_rows( 'slides' ) ) {
						the_row();
						?>
                        <li>
                            <img src="<?php the_sub_field( 'slider_image' ); ?>" alt="">
                            <!--======= BANNER INNER =========-->
                            <div class="banner-up">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <section><img class="img-responsive pull-left" src="" alt=""></section>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="text-sec">
                                                <section>

                                                </section>
                                                <section>
                                                    <h1><?php the_sub_field( 'slider_title_text' ); ?></h1>
                                                </section>
                                                <a href="http://webdemo.com.np/needes/contact-us" class="btn btn-1">Contact us</a><a href="http://webdemo.com.np/needes/introduction" class="btn">about
                                                    us</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
						<?php

					}
				}
				?>
            </ul>
        </div>
    </div>


    <!--======= OFFER SERVICES =========-->

    <section class="offer-services graybg services">
        <div class="container">
            <div class="row">


                <!--======= NAV TABS CONTENT =========-->
                <div class="col-sm-12">
                    <div class="tab-content">

                        <!--======= HandyMan Repairs =========-->
                        <div role="tabpanel" class="tab-pane animated fadeIn active" id="plumb">
                            <div class="row">
                                <div class="col-sm-5 about">
                                    <h2 class="text-center title-inner"> About Us</h2>
									<?php
									while ( have_posts() ) {
										the_post();
										the_content();
									}
									?>
                                </div>
                                <div class="col-md-7">
                                    <h2 class="text-center title-inner">Demanded Jobs</h2>

                                    <!--======= CLIENTS FEEDBACK =========-->
                                    <ul class="row  ">
                                        <!--======= SERVICES =========-->
										<?php $taxonomy = 'job-category'; //Choose the taxonomy
										$terms          = get_terms( $taxonomy ); //Get all the terms
                                        $i = 1;
										foreach ( $terms as $term ) : //Cycle through terms, one at a time
											// Check and see if the term is a top-level parent. If so, display it.
											$parent = $term->parent;
											if ( $parent == '0' ) :
												$term_id   = $term->term_id; //Define the term ID
												$term_link = get_term_link( $term, $taxonomy ); //Get the link to the archive page for that term
												$term_name = $term->name;
												$count     = $term->count;
//												$haschildren = count( get_term_children( $term_id, $taxonomy ) );
												?>
											<?php endif; ?>
                                            <li class="col-md-6">
                                                <div class="sec-in">
                                                    <h6><?php echo $term_name  ?></h6>
                                                    <a href="<?php echo $term_link ?>" class="go-right"><i
                                                                class="fa fa-angle-right"></i></a>
                                                </div>
                                            </li>
										<?php
                                        if($i>5)
                                            break;
                                        $i++;
										endforeach;
										?>
                                        <li class="col-md-12">
                                            <div class="sec-in">
                                                <h6>See All Available jobs</h6>
                                                <a href="http://webdemo.com.np/needes/avialable-jobs" class="go-right"><i
                                                            class="fa fa-angle-right"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
if ( have_rows( 'countries' ) ) {
	?>
    <!--======= CLIENTS FEEDBACK =========-->
    <section class="parthner ">
        <div class="container">
            <!--======= TITTLE =========-->
            <div class="tittle">
                <h2>Countries / clients</h2>
            </div>

            <!--======= PARTHNERS =========-->
            <div class="parthner-slide">

                <!--======= PARTHNERS =========-->
				<?php
				while ( have_rows( 'countries' ) ) {
					the_row(); ?>
                    <div class="part"><a href="#"> <img src="<?php the_sub_field( 'country_flag' ); ?>"
                                                        alt="<?php the_sub_field( 'country_name' ); ?>"
                                                        title="<?php the_sub_field( 'country_name' ); ?>"> </a></div>

					<?php
				}
				?>
            </div>
        </div>
    </section>
	<?php
}
?>


<?php
if ( have_rows( 'nes_cerrificates' ) ) {
	?>
    <div id="pop-project" class="zoom-anim-dialog mfp-hide pop-project">
        <div class="pop_up">
            <div class="row">
                <div class="col-sm-10">
                    <div id="carousel-img" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
							<?php
							$repeaters = get_field( 'nes_cerrificates' );
							$sn = 1;
							foreach ( $repeaters as $repeater ) {
								$x = ( $repeater['certificate_image'] );
								$x = $x['ID'];
								$image =  wp_get_attachment_image_src( $x, 'full' );
								?>
                                <div class="item <?php if($sn==1){echo 'active'; unset ($sn);} ?>"><img src="<?php echo $image[0]?>"></div>
                                <?php
                                echo $sn;
//                                $sn++;
							}
							?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <ol class="carousel-indicators">
	<?php
	$repeaters = get_field( 'nes_cerrificates' );
	$sn = 0;
	foreach ( $repeaters as $repeater ) {
		$x = ( $repeater['certificate_image'] );
		$x = $x['ID'];
		$image =  wp_get_attachment_image_src( $x, 'full' );
		?>
                        <li data-target="#carousel-img" data-slide-to="<?php echo $sn; ?>">
                            <div class="img-wrapp">

                                    <img class="img-responsive" src="<?php echo $image[0]?>" alt="">
<!--                                    <img src="--><?php //echo $image[0]?><!--">-->


                            </div>
                        </li>
	<?php
$sn++;
	}
?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="gallery  ">

        <div class="container  ">
            <!--======= TITTLE =========-->
            <div class="tittle">
                <h2>Certificates</h2>
            </div>
        </div>

        <!--======= GALLERY SLIDER =========-->

        <div class="gallery-slide">
	        <?php
	        $repeaters = get_field( 'nes_cerrificates' );
	        foreach ( $repeaters as $repeater ) {
	        $x = ( $repeater['certificate_image'] );
	        $x = $x['ID'];
	        $image =  wp_get_attachment_image_src( $x, 'full' );
	        ?>
            <div class="gal-item">

                <!--======= GALLERY IMAGE =========-->
                <img  src="<?php echo $image[0]?>" alt="">

                <!--======= GALLERY HOVER =========-->
                <div class="gallery-over"><a href="#pop-project"
                                             class="link-up link popup-vedio animated-6s fadeInLeftBig"><i
                                class="fa fa-long-arrow-right"></i></a>
                    <div class="items-text animated fadeInRightBig">
<!--                        <p>repair / fixing</p>-->
<!--                        <h5>tankless water heater</h5>-->
                    </div>
                </div>
            </div>
		        <?php
	        }
	        ?>
        </div>

    </section>
	<?php
}
?>
<?php
if ( have_rows( 'sister_organizations' ) ):
	?>
    <section id="team">
        <div class="container">
            <!--======= TITTLE =========-->
            <div class="tittle">
                <h2>Sister Organizations</h2>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <!--======= TEAM ROW =========-->
                    <ul class="row">
						<?php
						while ( have_rows( 'sister_organizations' ) ):
							the_row();
							?>
                            <li class="col-sm-4">
                                <div class="team"><a href="#"> <img class="img-responsive"
                                                                    src="<?php the_sub_field( 'organization_image' ); ?>"
                                                                    alt="<?php the_sub_field( 'organization_name' ); ?>"
                                                                    title="<?php the_sub_field( 'organization_name' ); ?>">
                                    </a>

                                    <!--======= TEAM DETAILS =========-->
                                    <div class="team-detail">
                                        <h6><?php the_sub_field( 'organization_name' ); ?></h6>
                                        <p><?php the_sub_field( 'organization_subtitle' ); ?></p>

                                        <!--======= SOCIAL ICON =========-->
                                        <ul class="social_icons animated-6s fadeInUp">
                                            <li class="facebook"><a
                                                        href="<?php the_sub_field( 'organization_facebook_link' ); ?>"><i
                                                            class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a
                                                        href="<?php the_sub_field( 'organization_twitter_link' ); ?>"><i
                                                            class="fa fa-twitter"></i></a></li>
                                            <li class="linkedin"><a
                                                        href="<?php the_sub_field( 'organization_linkedin_link' ); ?>"><i
                                                            class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
						<?php
						endwhile;
						?>
                    </ul>
                </div>

            </div>
        </div>
    </section>

<?php
endif;
get_footer();