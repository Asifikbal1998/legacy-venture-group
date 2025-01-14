<?php
// Template Name: Home
get_header();
?>


<!-- ======= Banner Section ======= -->
<section class="home-banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php $sliders = get_field('sliders');
            foreach ($sliders as $key => $value) { ?>
                <div class="carousel-item <?php if ($key == 0) {
                                                echo 'active';
                                            } ?>">
                    <img src="<?php echo $value['img']; ?>" class="d-block w-100" alt="Banner Image">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="home-cont">
                            <?php echo $value['content']; ?>
                            <a href=""><button class=""> Get Financial Guidance <i class="fa-solid fa-arrow-right"></i>
                                </button></a>
                        </div>
                    </div>
                </div>
            <?php  }  ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- ======= About Section ======= -->
<section class="home-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="aboutimg w-100">
                    <img class="w-100" src="<?php the_field('about_img'); ?>"
                        class="abt-image1" alt="About Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="about-content">
                    <div class="">
                        <div class="abtcont heading-area">
                            <?php the_field('about_content'); ?>
                            <a href="<?php echo site_url(); ?>"><button class="mt-3"> More About </button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= Team Section ======= -->
<section class="our-team-section">
    <div class="container">
        <div class="heading-area">
            <?php the_field('team_content'); ?>
        </div>
        <div class="row">
            <?php
            $teams = get_field('teams'); // Retrieve the teams field
            if ($teams) { // Check if teams field has data
                foreach ($teams as $team) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?php echo ($team['img']); ?>" alt="<?php echo esc_attr($team['name']); ?>">
                            </div>
                            <div class="team-content">
                                <?php echo ($team['name']); ?>
                            </div>
                            <ul class="social">
                                <?php
                                if (!empty($team['social_link'])) { // Check if social links exist
                                    foreach ($team['social_link'] as $link) { ?>
                                        <li>
                                            <a href="<?php echo ($link['url']); ?>" target="_blank">
                                                <i class="fa-brands <?php echo ($link['class']); ?>"></i>
                                            </a>
                                        </li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>

</section>

<!-- ======= services Section ======= -->
<section class="services">
    <div class="container">
        <div class="heading-area">
            <?php the_field('service_content'); ?>
        </div>
        <div class="slide-containeri swiper">
            <div class="slide-contenti">
                <div class="card-wrapper swiper-wrapper">
                    <?php
                    $Services = new WP_Query(array(
                        'post_type'            => 'our_services',
                        'posts_per_page'      => -1,
                        'post_status'         => 'publish',
                        'meta_value'          => '1'
                    ));
                    ?>

                    <?php
                    while ($Services->have_posts()) : $Services->the_post();
                    ?>
                        <div class="card swiper-slide">
                            <div class="card-content">
                                <?php the_post_thumbnail('full'); ?>
                                <div class="serviceboxcont">
                                    <h5><?php the_title(); ?></h5>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>"><button>Read More</button></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;  ?>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
        </div>
    </div>
</section>

<!-- ======= industry Section ======= -->
<section class="industry">
    <div class="container">
        <div class="heading-area">
        <h3>Connecting You with a Winning Franchise Network</h3>
        <p>Legacy’s network of franchises is carefully curated. We ensure every opportunity helps you build your future.</p>
        </div>
        <div class="row">
            <?php $franchiseName = get_field('franchises', 20);
            foreach ($franchiseName as $key => $value) { ?>
                <div class="col-md-3">
                    <div class="industrybox">
                        <h4><?php echo $value['name']; ?></h4>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </div>
</section>

<section class="brochure">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="doption">
                    <div class="heading-area">
                        <?php the_field('franchise_content', 20); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="dopcont">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Screenshot_2024-12-13_152942-removebg-preview 1.png" alt="">
                    <button>Download Our Brochure</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= why us Section ======= -->
<section class="why-choseus">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-5 col-md-5">
                <div class="imagearea">
                    <img src="<?php the_field('funding_img', 20); ?>" class="img-fluid abt-image" alt="Funding img">
                </div>
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="whyus-content">
                    <div class="heading-area">
                        <?php the_field('funding_content', 20); ?>
                    </div>

                    <div class="why-us">
                        <?php $fundingContent = get_field('funding_points', 20);
                        foreach ($fundingContent as $key => $value) { ?>
                            <div class="row mt-4" data-aos="fade-up" data-aos-delay="500">
                                <div class="whyusbox">
                                    <img class="whyicon effect10" src="<?php echo $value['icon']; ?>" alt="Icon">
                                </div>
                                <div class="whyusboxcont">
                                    <?php echo $value['content']; ?>
                                </div>
                            </div>
                        <?php }  ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= contact us Section ======= -->
<section class="contact-usfrom">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img class="w-100" src="<?php the_field('contact_img', 20); ?>" alt="Contact Image">
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <div class="heading-area">
                        <?php the_field('contact_content', 20); ?>
                    </div>
                    <div class="fcf-body">
                        <div id="fcf-form">
                            <?php $form = get_field('contact_form_short_code', 20);
                            echo do_shortcode($form);
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ======= blog Section ======= -->
<section class="home-blog">
    <div class="container">
        <div class="heading-area">
            <?php the_field('blog_content', 20); ?>
        </div>
        <div class="articles">
            <!-- Post article-->
            <?php
            $Services = new WP_Query(array(
                'post_type'            => 'post',
                'posts_per_page'      => 3,
                'post_status'         => 'publish',
                'meta_value'          => '1'
            ));
            ?>

            <?php
            while ($Services->have_posts()) : $Services->the_post();
                $date = get_the_date('F j, Y');
            ?>
                <article class="article-card">
                    <?php the_post_thumbnail('full'); ?>
                    <div class="article-content">
                        <div class="article-meta">
                            <time><i class="fa-regular fa-calendar-days"></i> <?php echo $date; ?></time>
                            <span class="article-category"><i class="fa-solid fa-book"></i> Business Solution</span>
                        </div>
                        <h2 class="article-title"><?php the_title(); ?></h2>
                        <p class="article-description"><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">
                            Read More
                            <span class="arrow-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>