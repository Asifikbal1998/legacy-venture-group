<?php get_header(); ?>

<section class="s-industry">
	<div class="container">
		<div class="row">
			<div class="col-md-7 brand-overview">
				<h1>Brand Overview</h1>
				<div class="contents" data-aos="fade-up" data-aos-duration="1500">
					<h4><?php the_field('franchise_name'); ?></h4>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-md-5">
				<img src="<?php the_field('franchise_logo') ?>" alt="franchise_logo" class="img-fluid" data-aos="zoom-in" data-aos-duration="4000" />
				<div class="form-sec">
					<h5><b>Get more info! Please fill this form</b></h5>
					<?php echo do_shortcode('[contact-form-7 id="b09cc64" title="Contact form for brands"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="franchise-numbers">
	<div class="container">
		<div class="row">
			<div class="">
				<h4>*NUMBERS</h4>
				<div class="row">
					<div class="col-md-4" data-aos="fade-up" data-aos-duration="4000">
						<p class="common-p">$<?php echo number_format(get_field('liquid_capital')); ?></p>
						<p>Liquid Capital Required</p>
					</div>
					<div class="col-md-4" data-aos="fade-up" data-aos-duration="4000">
						<p class="common-p">$<?php echo number_format(get_field('min_investment')); ?></p>
						<p>Min Investment</p>
					</div>
					<div class="col-md-4" data-aos="fade-up" data-aos-duration="4000">
						<p class="common-p">$<?php echo number_format(get_field('max_investment')); ?></p>
						<p>Max Investment</p>
					</div>
					<div class="col-md-4" data-aos="fade-up" data-aos-duration="4000">
						<p class="common-p">$<?php echo number_format(get_field('new_worth')); ?></p>
						<p>Net Worth Required</p>
					</div>
					<div class="col-md-4" data-aos="fade-up" data-aos-duration="4000">
						<p class="common-p">Available</p>
						<p>Financing</p>
					</div>
					<div class="col-md-4" data-aos="fade-up" data-aos-duration="4000">
						<p class="common-p">Yes</p>
						<p>Vet Fran Discount</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="franchise-delails">
	<div class="container">
		<div class="row">
			<div class="">
				<h4>FRANCHISOR DETAILS</h4>
				<table class="table">
					<tbody>
						<?php $franchiserDetails = get_field('franchiser_details'); ?>
						<?php foreach ($franchiserDetails as $detail) { ?>
							<tr>
								<td data-aos="fade-up" data-aos-duration="800"><b><?php echo $detail['points'] ?>:</b></td>
								<td data-aos="fade-up" data-aos-duration="800"><?php echo $detail['value'] ?></td>
							</tr>
						<?php  }   ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<section class="location-avilable">
	<div class="container">
		<div class="row">
			<div class="">
				<h4>LOCATION</h4>
				<div data-aos="fade-up" data-aos-duration="800">
					<?php the_field('location') ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get the current URL
    var currentUrl = window.location.href;
    
    // Create an anchor element to use the URL properties
    var url = new URL(currentUrl);
    
    // Get the path name and split it into segments
    var pathParts = url.pathname.split('/').filter(function(part) {
        return part !== '';
    });
    
    // Get the last part of the URL
    var lastPart = pathParts[pathParts.length - 1];
    
    // Find the hidden field by its name and set its value
    var hiddenField = document.querySelector('input[name="franchise-name"]');
    if (hiddenField) {
        hiddenField.value = lastPart;
    }
});
</script>