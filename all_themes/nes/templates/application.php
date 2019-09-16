<?php
/*
 * Template Name: Application Form
 */
get_header();
?>
	<section class="contact">
		<div class="container">

			<!--======= CONTACT INFORMATION =========-->
			<div class="contact-info">
				<div class="row">

					<div class="contact-form" style="padding: 10px;">


						<div class="tittle"><h2>Request Service or Estimate </h2>
							<hr>
							<p>Feel free to call us directly or simply complete our form below and we will follow up with you.</p>
						</div>


						<div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>

						<?php
						echo do_shortcode('[contact-form-7 id="248" title="Application Form" html_id="contact_form"]');
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
