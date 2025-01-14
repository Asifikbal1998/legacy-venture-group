<?php get_header();  ?>

<section class="s-page">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="col-md-8 blogconty">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();  ?>