<?php
// Template Name: Our Team
get_header();
?>

<!-- ======= Banner Section ======= -->
<section class="banner">
    <div class="b-img">
        <!-- <img src="images/banner-img.png" alt=""> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="home-cont">
                    <h1 class="">Our Team</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-team-section innerteam">
    <div class="container">
        <div class="heading-area">
            <?php the_content(); ?>
        </div>
        <div class="row">
            <?php
            $teams = get_field('teams', 20); // Retrieve the teams field
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

<?php get_footer(); ?>