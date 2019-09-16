<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="item">
                <div class="products prohome">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image">

										<?php if (has_post_thumbnail($featured_query->post->ID)) echo get_the_post_thumbnail($featured_query->post->ID, 'shop_catalog');
										else echo '<img src="' . wc_placeholder_img_src() . '" alt="Placeholder" width="65px" height="115px" />'; ?>

                                    </div>
                                </a>
                            </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left p">
                            <h3 class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="description"></div>
                            <div class="product-price">
								<?php
								echo custom_price();
								?>
                                <!--<span class="price-before-discount">$ 800</span>-->
                            </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->

                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
        </div>
		<?php
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
