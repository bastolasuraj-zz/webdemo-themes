<div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">

			<?php if ( has_post_thumbnail( $product->get_id() ) ) {
				$attachment_ids[0] = get_post_thumbnail_id( $product->get_id() );
				$attachment        = wp_get_attachment_image_src( $attachment_ids[0], 'full' ); ?>
                <div class="single-product-gallery-item" id="slide0">
                    <a data-lightbox="image-1" data-title="single"
                       href="<?php echo $attachment[0]; ?>">
                        <img data-echo="<?php echo $attachment[0]; ?>" class="img-responsive" alt=""
                             src="assets/images/blank.gif"/>
                    </a>
                </div>
				<?php

				$images = get_field( 'product_image_gallery' );
				$size   = 'full'; // (thumbnail, medium, large, full or custom size)
				$sn     = 1;
				if ( $images ) : ?>
					<?php foreach ( $images as $image ) :
						$abc = $image['url']
						?>
                        <div class="single-product-gallery-item" id="slide<?php echo $sn; ?>">
                            <a data-lightbox="image-1" data-title="Gallery" href="<?php echo $abc; ?>">
                                <img class="img-responsive" alt="" src="assets/images/blank.gif"
                                     data-echo="<?php echo $abc; ?>"/>
                            </a>
                        </div><!-- /.single-product-gallery-item -->
						<?php $sn ++; endforeach; ?>
				<?php endif; ?>
			<?php } ?>

        </div><!-- /.single-product-slider -->


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">

				<?php if ( has_post_thumbnail( $product->get_id() ) ) {
					$attachment_ids[0] = get_post_thumbnail_id( $product->get_id() );
					$attachment        = wp_get_attachment_image_src( $attachment_ids[0], 'full' ); ?>
                    <div class="item">
                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0"
                           href="#slide0">
                            <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="<?php echo $attachment[0]; ?>"/>
                        </a>
                    </div>
					<?php

					$images = get_field( 'product_image_gallery' );
					$size   = 'full'; // (thumbnail, medium, large, full or custom size)
                    $sn = 1;
					if ( $images ) : ?>
                        <ul>
							<?php foreach ( $images as $image ) :
								$abc = $image['url']
								?>
                                <div class="item">
                                    <a class="horizontal-thumb" data-target="#owl-single-product"
                                       data-slide="<?php $sn; ?>" href="#slide<?php $sn; ?>">
										<?php echo $abc; ?>
                                        <!-- <img class="img-responsive" alt="" src="assets/images/products/p1.jpg"> -->
                                    </a>
                                </div>
							<?php $sn++; endforeach; ?>
                        </ul>
					<?php endif; ?>
					<?php
				}
				?>

            </div><!-- /#owl-single-product-thumbnails -->


        </div><!-- /.gallery-thumbs -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->