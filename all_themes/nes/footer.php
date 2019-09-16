<footer>
    <div class="container">
        <ul class="row">


            <!--======= HAPPY CLIENTS =========-->
            <li class="col-sm-4">

                <!--======= COUNTER =========-->
                <div class="counters"><i class="fa fa-trophy"></i>
                    <p>Countries Served</p>
                    <span>7</span></div>
                <!--======= LINKS =========-->
                <h5>Contact</h5>
                <hr>
                <p>Address: Dhapasi-8, Kathmandu, Nepal </p>
                <p>Phone: +977 1 4384248</p>
                <p>Fax: +977 1 4366175</p>
                <p>Email: needemployemtservices@gmail.com</p>

                <!--======= SOCIAL ICONS =========-->

                <ul class="social_icons">
                    <li class="facebook"><a href="#."><i class="fa fa-facebook"></i> </a></li>
                    <li class="twitter"><a href="#."><i class="fa fa-twitter"></i> </a></li>
                    <li class="linkedin"><a href="#."><i class="fa fa-linkedin"></i> </a></li>
                    <li class="tumblr"><a href="#."><i class="fa fa-tumblr"></i> </a></li>
                </ul>
            </li>

            <!--======= HAPPY CLIENTS =========-->
            <li class="col-sm-4">

                <!--======= COUNTER =========-->
                <div class="counters"><i class="fa fa-rocket"></i>
                    <p>years of service</p>
                    <span>Since 2002</span></div>
                <!--======= LINKS =========-->
                <h5>Demanded Jobs</h5>
                <hr>
                <div class="links">
                    <ul>
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
                            if($i>5)
                                break;

								?>
							<?php endif; ?>
                            <li><a href="<?php echo $term_link?>"><?php echo $term_name?></a></li>
						<?php
                        $i++;
						endforeach;
						?>
                    </ul>
                </div>
            </li>
            <!--======= HAPPY CLIENTS =========-->
            <li class="col-sm-4">

                <!--======= COUNTER =========-->
                <div class="counters"><i class="fa fa-heart-o"></i>
                    <p>HAPPY CLIENTS</p>
                    <span>200+</span></div>
                <!--======= LINKS =========-->
                <h5>site links</h5>
                <hr>
                <div class="links">
					<?php
					wp_nav_menu( 'footer-menu' );
					?>
                </div>
            </li>


        </ul>
    </div>
    <div class="rights">
        <p>Copyright © 2019 Need Employment Service. All Rights Reserved.</p>
    </div>
</footer>
<?php

wp_footer(); ?>

</body>
</html>
