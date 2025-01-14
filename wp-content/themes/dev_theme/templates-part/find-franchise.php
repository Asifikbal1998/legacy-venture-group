                <?php
                $blogList = new WP_Query(array(
                    'post_type'      => 'templatesparts',
                    'posts_per_page' => 1,
                    'post_status'    => 'publish',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'category',        // The taxonomy to query
                            'field'    => 'slug',            // Use 'slug' to find by slug
                            'terms'    => 'find-franchise',  // The slug of the category
                        ),
                    ),
                ));
                ?>

                <?php
                while ($blogList->have_posts()) : $blogList->the_post();
                ?>

                    <section class="consultant">
                        <div class="container">
                            <?php the_content(); ?>
                            <button class="popmake-15">FREE CONSULTANT</button>
                        </div>
                    </section>

                <?php endwhile;     ?>