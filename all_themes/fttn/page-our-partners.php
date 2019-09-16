<?php
get_header();
?>
    <div class="body-content outer-top-vs" id="top-banner-and-menu">

    <div class="container">
    <div class="row">
<?php get_sidebar(); ?>

        <!-- ================================== TOP NAVIGATION ================================== -->

        <!-- /.side-menu -->
    <div class="blog-page">
    <div class="col-md-9">
    <section class="section latest-blog outer-bottom-vs">
        <h3 class="section-title">Our Partners</h3>
        <div class="container">
            <div class="row">
				<?php
				$partners = get_field( 'list_of_partners' );
				foreach ( $partners as $partner ):
					?>
                    <div class="col-md-3">
                        <div class="pa">
                            <img src="<?php echo $partner['partner_image'] ?>" alt="<?php echo $partner['partner_name'] ?>" title="<?php echo $partner['partner_name'] ?>" width="100%">
                        </div>
                    </div>
				<?php
				endforeach;
				?>
            </div>

        </div>

    </section>
    </div>
    </div>
    </div>

<?php
get_footer();
