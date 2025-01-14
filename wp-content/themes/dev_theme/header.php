<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php if (is_front_page()) ?> <?php bloginfo('name'); ?>
        <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- ======= Menu Section ======= -->
    <section class="topbar">
        <div class="row">
            <div class="col-md-3">
                <div class="mainlogo">
                    <a href="<?php echo site_url(); ?>"><img class="logo" src="<?php echo get_theme_mod('legacygroup_logo'); ?>" alt="Logo"></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="mailarea">
                    <div class="email">
                        <div class="topbaricona">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="topbarcont">
                            <h5>Email :</h5>
                            <p><a href="mailto: ">sbork4@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="call">
                        <div class="topbaricona">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="topbarcont">
                            <h5>Call :</h5>
                            <p><a href="tel: ">+91 9876543210</a></p>
                        </div>
                    </div>
                    <div class="location">
                        <div class="topbaricona">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="topbarcont">
                            <h5>Location :</h5>
                            <p> sdf building, salt lake city, kolkata</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======= Menu Section ======= -->
    <div class="wrapper">
        <nav>
            <input type="checkbox" id="show-search">
            <input type="checkbox" id="show-menu">
            <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="content">
                <!-- <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="#" class="desktop-link">About Us +</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">About Us +</label>
                        <ul>
                            <li><a href="ourteam.html">Meet Our Team</a></li>
                            <li><a href="ourstory.html">Our Story</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Services +</a>
                        <input type="checkbox" id="show-features">
                        <label for="show-features">Services +</label>
                        <ul>
                            <li><a href="service1.html">Personal Credit Repair</a></li>
                            <li><a href="service2.html">Business Credit Building</a></li>
                            <li><a href="service3.html">Franchise Match and Sales</a></li>
                            <li><a href="service4.html">Funding Services</a></li>
                            <li><a href="service5.html">Legacy Business Essentials</a></li>
                            <li><a href="service6.html">Educational and Advisory Support</a></li>
                            <li><a href="service7.html">Business Opportunity Development</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Franchise Network +</a>
                        <input type="checkbox" id="show-services">
                        <label for="show-services">Franchise Network +</label>
                        <ul>
                            <li><a href="industry.html">industry</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Resources +</a>
                        <input type="checkbox" id="show-services">
                        <label for="show-services">Resources +</label>
                        <ul>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="desktop-link">Our Partner +</a>
                        <input type="checkbox" id="show-items">
                        <label for="show-items">Our Partner +</label>
                        <ul>
                            <li><a href="creditsuit.html">CreditSuite</a></li>
                            <li><a href="others.html">Others</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul> -->
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'Primary Menu',
                        'menu_class' => 'links',
                        'manu_id' => '',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'walker' => new Custom_Walker_Nav_Menu(),
                        'add_a_class' => ''
                    )
                );
                ?>
            </div>
            <label for="show-search" class="search-icon"></label>
            <button class="popmake-1376">Start Your Journey</button>
        </nav>
    </div>