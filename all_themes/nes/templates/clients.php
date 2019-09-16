<?php
/*
 * Template Name: Clients
 */
get_header();
?>
<?php
$args = array(
	'post_type'=>'clients',
    'orderby'=>'ID',
    'order'=>'ASC'
);
$query = new WP_Query($args);
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
        <section class="offer-services">
            <div class="container">
                <!--======= TITTLE =========-->
                <div class="tittle">
                    <h2> <?php the_title()?> </h2>
                </div>
                <div class="row">


                    <!--======= NAV TABS CONTENT =========-->
                    <div class="col-sm-12">
                        <div class="tab-content">

                            <!--======= HandyMan Repairs =========-->
                            <div role="tabpanel" class="tab-pane animated fadeIn active" id="plumb">
                                <div class="row">
	                                <?php
	                                if(have_rows('description')) {
		                                ?>
		                                <div class="col-sm-6 about">
			                                <ul>
				                                <?php
				                                while ( have_rows( 'description' ) ) {
				                                	the_row();
					                                ?>
					                                <li>
						                                <p><i class="fa fa-tint"></i> <?php the_sub_field('items'); ?>
						                                </p>
					                                </li>
					                                <?php
				                                }
				                                ?>
			                                </ul>
		                                </div>
		                                <?php
	                                }
		                                ?>
                                    <div class="col-sm-6"><img class="img-responsive tt img-up animated fadeInRight"
                                                               src="<?php the_field('singular_image'); ?>" alt=""></div>
                                </div>


                                <div class="col-sm-3 ">
                                    <div role="tabpanel">
                                        <!--======= NAV TABS =========-->

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
		<?php
	}
	wp_reset_postdata();
}
?>
<?php
get_footer();
