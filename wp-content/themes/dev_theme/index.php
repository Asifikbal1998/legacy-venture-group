<?php get_header();  ?>



<div class="banner-cont">
    <div class="row">
        <div class="col-md-12">
		<img src="<?php echo get_template_directory_uri(  ); ?>/images/Rectangle 30.png" class="w-100" alt="image3">
        </div>
    </div>
</div>


<div class="section inner-blog">
    <div class="container">
        <div class="row">
            <?php 
					$BlogList = new WP_Query( array(
						'post_type'      	  => 'post',
						'posts_per_page'      => -1,
						'post_status'         => 'publish',
						'meta_value'	      => '1'
					));
				?>

            <?php 
				  while ( $BlogList->have_posts() ) : $BlogList->the_post();
				?>
            <div class="col-md-12">
                <div class="right-side-asc">
                    <h5><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h5>
                    <?php the_post_thumbnail( 'full' ); ?>
                    <p><?php the_excerpt(  ); ?></p>
                </div>
            </div>
            <?php endwhile;  ?>
        </div>
    </div>
</div>

<?php  get_footer();  ?>