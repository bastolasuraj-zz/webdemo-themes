<?php
/*
 * Template Name: Procedure
 */
get_header();
?>

    <!--======= OFFER SERVICES =========-->

    <section class="offer-services">
        <div class="container">
            <!--======= TITTLE =========-->
            <div class="tittle">
                <h2><?php the_title(); ?></h2>
            </div>
			<?php
			while ( have_posts() ):the_post();
				the_content();endwhile;
			?>
            <div class="row">
                <div class="col-sm-3">
                    <div role="tabpanel">
                        <!--======= NAV TABS =========-->
                        <ul class="nav nav-tabs" role="tablist">
							<?php
							while ( have_rows( 'procedures' ) ) {
								the_row();
								$text = strtolower( get_sub_field( 'procedure_title' ) );
								?>
                                <li role="presentation">
                                    <a href="#<?php echo str_replace( ' ', '', $text ); ?>" role="tab"
                                       data-toggle="tab"><?php the_sub_field( 'procedure_title' ); ?>
                                        <i class="animated bounceInLeft fa fa-long-arrow-right"></i>
                                    </a>
                                </li>
								<?php
							}
							?>
                        </ul>
                    </div>
                </div>

                <!--======= NAV TABS CONTENT =========-->
                <div class="col-sm-9">
                    <div class="tab-content">
						<?php
						$sn = 1;
						while ( have_rows( 'procedures' ) ) {
							the_row();
							$text = strtolower( get_sub_field( 'procedure_title' ) );
							?>
                            <!--======= HandyMan Repairs =========-->
                            <div role="tabpanel" class="tab-pane animated fadeIn <?php if ( $sn == 1 ) {
								echo 'active';
							}
							unset( $sn ); ?>" id="<?php echo str_replace( ' ', '', $text ); ?>">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h4><?php strtoupper( the_sub_field( 'procedure_title' ) ); ?> </h4>
										<?php
										the_sub_field( 'procedure_description' )
										?>
                                    </div>
									<?php
//									if ( have_rows( 'procedure_image' ) ):
										?>
                                        <div class="col-sm-4"><img class="img-responsive img-up"
                                                                   src="<?php the_sub_field( 'procedure_image' ); ?>"
                                                                   alt="">
                                        </div>
									<?php
//									else:
//									endif;
									?>
                                </div>
                            </div>
							<?php
//                            $sn++;
						}
						?>
                    </div>
                </div>
            </div>
    </section>

<?php
get_footer();