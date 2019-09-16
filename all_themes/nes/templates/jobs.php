<?php
/*
 * Template Name: Jobs
 */
get_header();
$category = 'job-category';
//global $slug;

?>
<?php
//$cats = get_terms( $category );
//foreach ( $cats as $cat ) {
//	echo $cat->name . '<br>';
//	echo $cat->count . '<br>';
//
//
//}
?>
<!--======= OFFER SERVICES =========-->
<section class="offer-services offer-services-2">
    <div class="container">
        <!--======= TITTLE =========-->
        <div class="tittle">
            <h2>AVAILABLE JOBS</h2>
        </div>
        <div class="row"
        <div class="col-sm-9">
            <div class="tab-content service-part no-padding">
                <ul class="row">
					<?php $taxonomy = 'job-category'; //Choose the taxonomy
					$terms          = get_terms( $taxonomy ); //Get all the terms
					foreach ( $terms as $term ) : //Cycle through terms, one at a time
						// Check and see if the term is a top-level parent. If so, display it.
						$parent = $term->parent;
						if ( $parent == '0' ) :
							$term_id = $term->term_id; //Define the term ID

							$term_link = get_term_link( $term, $taxonomy ); //Get the link to the archive page for that term
							$term_name = $term->name;
							$count     = $term->count;
//												$haschildren = count( get_term_children( $term_id, $taxonomy ) );
							$queried_object = get_queried_object(); // gets the term
							$post_id = $taxonomy."_".$term_id;
//							$image = get_field('image_field_name', $post_id);
                        $image = get_field('category_image',$post_id);
							?>
						<?php endif; ?>
                        <li class="col-md-3">
                            <section>
                                <img class="img-responsive" src="<?php echo $image; ?>" alt="">
                                <div class="ser-details"><a href="<?php echo $term_link ?>"><?php echo $term_name; ?></a>
                                </div>
                            </section>
                        </li>
					<?php
					endforeach;
					?>
                </ul>
            </div>

			<?php
			//						wp_reset_postdata();

			//						}
			//					}
			?>
        </div>

    </div>


    </div>
    </div>
</section>

<?php
get_footer();
?>
<!---->
<!--<div class="row">-->
<!--    <div class="col-lg-10 offset-lg-1 col-12">-->
<!--        <div class="faq-content">-->
<!--            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">-->
<!---->
<!--				--><?php //$terms2 = get_terms( 'downloads' );
//				foreach ( $terms2 as $term2 ):
//
//					$i = 1;
//
//					?>
<!---->
<!--                    <div class="panel panel-default">-->
<!--                        <!-- Single Faq -->-->
<!--                        <div class="faq-heading" id="FaqTitle--><?php //echo $i; ?><!--">-->
<!--                            <h4 class="faq-title">-->
<!--                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion"-->
<!--                                   href="#faq--><?php //echo $i; ?><!--">--><?php //echo $term2->name; ?><!-- </a>-->
<!--                            </h4>-->
<!--                        </div>-->
<!--                        <div id="faq--><?php //echo $i; ?><!--" class="panel-collapse collapse show"-->
<!--                             role="tabpanel" aria-labelledby="FaqTitle--><?php //echo $i; ?><!--">-->
<!--                            <div class="faq-body">-->
<!--                                <ul>-->
<!---->
<!--									--><?php
//
//
//									$args = array(
//										'post_type' => 'download',
//
//										'posts_per_page' => - 1,
//
//										'tax_query' => array(
//											array(
//												'taxonomy' => 'downloads',
//												'field'    => 'slug',
//												'terms'    => $term2->slug,
//											)
//										)
//
//									);
//									$news = new WP_Query( $args );
//
//									if ( $news->have_posts() ): while ( $news->have_posts() ) : $news->the_post();
//										?>
<!---->
<!---->
<!--                                        <li>-->
<!--                                            <a href="--><?php //the_field( 'file' ); ?><!--"> --><?php //the_title(); ?><!-- </a>-->
<!--                                        </li>-->
<!---->
<!--									--><?php //endwhile;
//										wp_reset_postdata(); endif; ?>
<!---->
<!--                                </ul>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <!--/ End Single Faq -->-->
<!--                    </div>-->
<!---->
<!--					--><?php //$i = $i + 1; endforeach; ?>
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!---->


<!--<li class="col-sm-4">-->
<!--    <section><img class="img-responsive"-->
<!--                  src="images/services-img-1.jpg"-->
<!--                  alt="">-->
<!--        <div class="ser-details"><a href="#.">Civil/Electrical </a>-->
<!--        </div>-->
<!--    </section>-->
<!--</li>-->
