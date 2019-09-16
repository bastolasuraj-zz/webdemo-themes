<?php
/*
 * Template Name: Contact Us
 */
get_header();
?>

	<section class="contact">
		<div class="container">

			<!--======= CONTACT INFORMATION =========-->
			<div class="contact-info">
				<div class="row">

					<!--======= CONTACT =========-->
					<div class="col-sm-12">
						<ul class="row con-det">

							<!--======= ADDRESS =========-->
							<li class="col-md-4">
								<h6>Phone</h6>
								<hr>

								<h4><?php the_field('phone_number'); ?></h4>

							</li>

							<!--======= EMAIL =========-->
							<li class="col-md-4">
								<h6>Address</h6>
								<hr>
								<p><?php the_field('address'); ?></p>
							</li>

							<!--======= ADDRESS =========-->
							<li class="col-md-4">
								<h6>Email</h6>
								<hr>
								<a href="mailto:<?php the_field('e-mail'); ?>"><?php the_field('e-mail'); ?></a>
							</li>
						</ul>

					</div>

					<!--======= CONTACT FORM =========-->



					<div class="contact-form">


						<div class="tittle"><h2>Request Service or Estimate </h2>
							<hr>
							<p>Feel free to call us directly or simply complete our form below and we will follow up with you.</p>
						</div>


						<div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>

						<?php
                        $cf = get_field('contact_form_code');
						echo do_shortcode($cf);
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
the_field('map_code');
?>

<?php
get_footer();
