<?php
// Template Name: Terms & Conditions
get_header();
?>


<section class="inner-banner" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');">
    <div class="row">
        <div class="col-md-12">
            <div class="bannercont">
                <div class="">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="inner-conditions" id="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>