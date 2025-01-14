<?php
// Template Name: Blog
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

<section class="inner-blog">
    <div class="container">
        <div class="heading">
            <h5 class="" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                data-aos-duration="800"> Blog & News </h5>
            <?php the_title(); ?>
        </div>
        <div class="row">
            <?php
            $BlogList = new WP_Query(array(
                'post_type'            => 'post',
                'posts_per_page'      => -1,
                'post_status'         => 'publish',
                'meta_value'          => '1'
            ));
            ?>

            <?php
            while ($BlogList->have_posts()) : $BlogList->the_post();
            ?>
                <div class="col-md-6">
                    <div class="blog-card">
                        <div class="meta">
                            <div class="photo" style="background-image: url('<?php the_post_thumbnail_url('thumbnail'); ?>');"></div>
                            <ul class="details">
                                <li class="author"><a href="#">By Admin</a></li>
                                <li class="date"><?php the_field('chose_date'); ?></li>
                            </ul>
                        </div>
                        <div class="description">
                            <h4><?php the_title(); ?></h4>
                            <p> <?php the_excerpt(); ?></p>
                            <p class="read-more">
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile;     ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>