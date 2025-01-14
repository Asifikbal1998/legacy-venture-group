<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row footer-content">
            <div class="col-md-4 footer-section">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo_color-removebg-preview(1).png" alt="Legacy Ventures Group" class="logo">
                <p>Ready to embark on a rewarding entrepreneurial journey? Join Future State and be part of a legacy
                    of success. Contact us to learn more about franchise </p>
            </div>
            <div class="col-md-2 footer-section">
                <h3>Quick Links</h3>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'Footer1',
                        'menu_class' => '',
                        'manu_id' => '',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'add_a_class' => ''
                    )
                );
                ?>
            </div>
            <div class="col-md-2 footer-section">
                <h3>Quick Links</h3>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'Footer2',
                        'menu_class' => '',
                        'manu_id' => '',
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'add_a_class' => ''
                    )
                );
                ?>
            </div>
            <div class="col-md-4 footer-section">
                <h3>Contact</h3>
                <ul>
                    <li>Call : 91 9876543210</li>
                    <li>Mail : info123@gmail.com</li>
                    <li>Location : sdf building , kolkata</li>
                </ul>
                <div class="social-links">
                    <h4>Follow Us :</h4>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href=""><i class="fa-solid fa-g"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-bottom">
        <p class="text-white">Copyrights <sup>©</sup> <?php echo date('Y'); ?> Legacy Ventures Group | Development by: <a target="_blank" href="https://www.pasdgtal.com/">PAS Digital Technologies</a></p>
        <div>
            <a href="#">Privacy Policy</a> | <a href="#">Terms & Conditions</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>