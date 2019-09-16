<?php if ( ! is_page( array( 'contact-us' ) ) ) : ?>
    <!-- ============================================== SIDEBAR ============================================== -->
    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

    <!-- ================================== TOP NAVIGATION ================================== -->

    <!-- /.side-menu -->

    <div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal">
    <ul class="nav">


	<?php $taxonomy = 'product_cat'; //Choose the taxonomy
	$terms          = get_terms( $taxonomy ); //Get all the terms

	foreach ( $terms as $term ) : //Cycle through terms, one at a time

		// Check and see if the term is a top-level parent. If so, display it.
		$parent = $term->parent;
		if ( $parent == '0' ) :

			$term_id = $term->term_id; //Define the term ID
			$term_link = get_term_link( $term, $taxonomy ); //Get the link to the archive page for that term
			$term_name = $term->name;


			$haschildren = count( get_term_children( $term_id, $taxonomy ) );

			?>


            <li class="dropdown menu-item"><a href="#" class="dropdown-toggle"
                                              data-toggle="dropdown"><?php echo $term_name; ?></a>
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12">

								<?php
								$term_id       = $term_id;
								$taxonomy_name = 'product_cat';
								$termchildren  = get_term_children( $term_id, $taxonomy_name );

								echo '<ul >';
								foreach ( $termchildren

								as $child ) {
								$childterm = get_term_by( 'id', $child, $taxonomy_name );

								if ( $childterm->parent == $term_id ) :
								$haschildren = count( get_term_children( $childterm->term_id, $taxonomy_name ) );
								?>

                    <li>
                        <a href="<?php echo get_term_link( $child, $taxonomy_name ); ?>"><?php echo $childterm->name; ?></a>
                    </li>

					<?php endif; ?>

					<?php }
					echo '</ul>';
					?>
            </div>


            </div>
            <!-- /.row -->
            </li>
            <!-- /.yamm-content -->
            </ul>
            <!-- /.dropdown-menu -->
            <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
            <!-- /.menu-item -->


		<?php endif; endforeach; ?>

    <!-- /.menu-item -->
    </ul>
    <!-- /.nav -->
    </nav>
    <!-- /.megamenu-horizontal -->
    </div>

	<?php
	$args  = array(
		'post_type'      => 'product',
		'posts_per_page' => 4,
		'meta_query'     => array(
			'relation' => 'OR',
			array( // Simple products type
				'key'     => '_sale_price',
				'value'   => 0,
				'compare' => '>',
				'type'    => 'numeric'
			),
			array( // Variable products type
				'key'     => '_min_variation_sale_price',
				'value'   => 0,
				'compare' => '>',
				'type'    => 'numeric'
			)
		)
	);
	$loop  = new WP_Query( $args );
	$count = $loop->found_posts;
//	echo 'the count is' . $count;
	if ( $count > 0 ):
		?>
        <div class="sidebar-widget outer-bottom-small">
            <h3 class="section-title">Special Offer</h3>
            <div class="sidebar-widget-body outer-top-xs">
                <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                    <div class="item ">
                        <div class="products special-product">
							<?php
							if ( $loop->have_posts() ) {
								while ( $loop->have_posts() ) : $loop->the_post();

									?>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">

															<?php if ( has_post_thumbnail( $loop->post->ID ) ) {
																echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' );
															} else {
																echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />';
															} ?>

                                                        </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
														<?php global $product; ?>
                                                        <h3 class="name"><a
                                                                    href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h3>
                                                        <div class="product-price">
															<?php echo custom_price() ?>
                                                        </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
								<?php
								endwhile;
								wp_reset_postdata();
							}
							?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.sidebar-widget-body -->
        </div>
	<?php
	endif;
	?>
    <!-- /.sidebar-widget -->
    <!-- ============================================== SPECIAL DEALS : END ============================================== -->
    <!-- ============================================== NEWSLETTER ============================================== -->
    <div class="sidebar-widget newsletter outer-bottom-small">
        <h3 class="section-title">Newsletters</h3>
        <div class="sidebar-widget-body outer-top-xs">
            <p>Sign Up for Our Newsletter!</p>
			<?php
			echo do_shortcode( '[mc4wp_form id="48"]' );
			?>
        </div>
        <!-- /.sidebar-widget-body -->
    </div>
    <!-- /.sidebar-widget -->
    <!-- ============================================== NEWSLETTER: END ============================================== -->

    <!-- ============================================== Testimonials============================================== -->
	<?php
	$args  = array(
		'post_type'      => 'testimonials',
		'posts_per_page' => 3,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);
	$query = new WP_Query( $args );
	$count = $query->found_posts;
	if ( $count > 0 ):?>
        <div class="sidebar-widget outer-top-vs ">
            <div id="advertisement" class="advertisement">

				<?php
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post()
						?>
                        <div class="item">
                            <div class="avatar"><img src="<?php the_field( 'testimonial_image' ) ?>" alt="Image"></div>
                            <div class="testimonials"><em>"</em> <?php the_field( 'testimonial_testimonial' ) ?>
                                <em>"</em></div>
                            <div class="clients_author"><?php the_field( 'testimonial_name' ) ?>
                                <span><?php the_field( 'testimonial_company' ) ?></span></div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->
						<?php
					}
					wp_reset_postdata();
				} ?>


            </div>
            <!-- /.owl-carousel -->
        </div>
	<?php endif; ?>
    <!-- ============================================== Testimonials: END ============================================== -->

    </div>
    <!-- /.sidemenu-holder -->
    <!-- ============================================== SIDEBAR : END ============================================== -->
<?php endif;
