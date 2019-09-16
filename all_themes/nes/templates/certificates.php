<?php
/*
 * Template Name: Certificates
 */
get_header();
?>
    <section class="offer-services offer-services-2">
		<?php
		if ( have_rows( 'nes_cerrificates_archived' ) ) {
			?>
            <div id="pop-project" class="zoom-anim-dialog mfp-hide pop-project">
                <div class="pop_up">
                    <div class="row">
                        <div class="col-sm-10">
                            <div id="carousel-img" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
									<?php
									$repeaters = get_field( 'nes_cerrificates_archived' );
									$sn        = 1;
									foreach ( $repeaters as $repeater ) {
										$x     = ( $repeater['certificate_image_a'] );
										$x     = $x['ID'];
										$image = wp_get_attachment_image_src( $x, 'full' );
										?>
                                        <div class="item <?php if ( $sn == 1 ) {
											echo 'active';
											unset ( $sn );
										} ?>"><img src="<?php echo $image[0] ?>"></div>
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
								$repeaters = get_field( 'nes_cerrificates_archived' );
								$sn        = 0;
								foreach ( $repeaters as $repeater ) {
									$x     = ( $repeater['certificate_image_a'] );
									$x     = $x['ID'];
									$image = wp_get_attachment_image_src( $x, 'full' );
									?>
                                    <li data-target="#carousel-img" data-slide-to="<?php echo $sn; ?>">
                                        <div class="img-wrapp">

                                            <img class="img-responsive" src="<?php echo $image[0] ?>" alt="">
                                            <!--                                    <img src="-->
											<?php //echo $image[0]?><!--">-->


                                        </div>
                                    </li>
									<?php
									$sn ++;
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
                        <h2>Archive Certificates</h2>
                    </div>
                </div>

                <!--======= GALLERY SLIDER =========-->

                <div class="gallery-slide">
					<?php
					$repeaters = get_field( 'nes_cerrificates_archived' );
					foreach ( $repeaters as $repeater ) {
						$x     = ( $repeater['certificate_image_a'] );
						$x     = $x['ID'];
						$image = wp_get_attachment_image_src( $x, 'full' );
						?>
                        <div class="gal-item">

                            <!--======= GALLERY IMAGE =========-->
                            <img src="<?php echo $image[0] ?>" alt="">

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
    </section>
    <section class="offer-services offer-services-2">
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
									$sn        = 1;
									foreach ( $repeaters as $repeater ) {
										$x     = ( $repeater['certificate_image'] );
										$x     = $x['ID'];
										$image = wp_get_attachment_image_src( $x, 'full' );
										?>
                                        <div class="item <?php if ( $sn == 1 ) {
											echo 'active';
											unset ( $sn );
										} ?>"><img src="<?php echo $image[0] ?>"></div>
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
								$sn        = 0;
								foreach ( $repeaters as $repeater ) {
									$x     = ( $repeater['certificate_image'] );
									$x     = $x['ID'];
									$image = wp_get_attachment_image_src( $x, 'full' );
									?>
                                    <li data-target="#carousel-img" data-slide-to="<?php echo $sn; ?>">
                                        <div class="img-wrapp">

                                            <img class="img-responsive" src="<?php echo $image[0] ?>" alt="">
                                            <!--                                    <img src="-->
											<?php //echo $image[0]?><!--">-->


                                        </div>
                                    </li>
									<?php
									$sn ++;
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
                        <h2>Statutory Certificates</h2>
                    </div>
                </div>

                <!--======= GALLERY SLIDER =========-->

                <div class="gallery-slide">
					<?php
					$repeaters = get_field( 'nes_cerrificates' );
					foreach ( $repeaters as $repeater ) {
						$x     = ( $repeater['certificate_image'] );
						$x     = $x['ID'];
						$image = wp_get_attachment_image_src( $x, 'full' );
						?>
                        <div class="gal-item">

                            <!--======= GALLERY IMAGE =========-->
                            <img src="<?php echo $image[0] ?>" alt="">

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
    </section>


<?php
get_footer();
