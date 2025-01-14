<?php
// Template Name: Contact Us
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


<section class="innercont">
    <div class="container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one"><?php the_field('address'); ?></div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one"><?php the_field('phone'); ?></div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one"><?php the_field('email'); ?></div>
                </div>
            </div>
            <div class="right-side home-contact">
                <div class="topic-text">Send us a message</div>
                <p><?php the_content(); ?></p>
                <?php $forms = get_field('contact_form_short_code'); ?>
                <?php echo do_shortcode($forms); ?>
            </div>
        </div>
    </div>
</section>

<section class="map">
<div class="container">
        <div class="mapx">
            <iframe src="<?php the_field('map_url'); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>