<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Need_Employment_Services
 */

get_header();
//the_title();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<section class="offer-services">
					<div class="container">
						<!--======= TITTLE =========-->

						<div class="tittle">
							<h2> <?php the_title();?></h2>
						</div>
						<div class="row ">

							<div class="col-md-8 "  >

								<form>
									<table class="table table-striped table-bordered">
										<tr  >
											<td class="active companyname" style="font-size: 18px;">Company Name</td>
											<td class="companyname company" style="font-size: 18px;"><?php the_field('company_name');?></td>
										</tr>
										<tr >
											<td >Job Details</td>
											<td><?php the_field('job_detail');?></td>
										</tr>
										<tr >
											<td class="">Opening</td>
											<td><?php the_field('opening_date');?></td>
										</tr>
										<tr >
											<td >Salary</td>
											<td><?php the_field('salary');?></td>
										</tr>
										<tr >
											<td >Apply Before</td>
											<td><?php the_field('final_date');?></td>
											<!--                                        <td><input type="date" name=""> </td>-->
										</tr>
										<tr>
											<td >Country</td>
											<td><?php the_field('country');?></td>
										</tr>
										<tr>
											<td > </td>
											<td>  <a href="http://webdemo.com.np/needes/application-form?job=<?php the_title();?>" class="btn btn-1">Apply Now</a> </td>
										</tr>
									</table>
								</form>
							</div>
							<div class="col-md-4">

							</div>


						</div>

					</div>
				</section>

			<?php
//			get_template_part( 'template-parts/content', get_post_type() );

//			the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
