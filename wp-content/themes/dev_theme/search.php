<?php get_header(); ?>

<div class="banner-cont">
    <div class="row">

        <?php
        $s = get_search_query();
        $args = array(
            's' => $s
        );
        // The Query
        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) {
            _e("<div class='container s-result'><h2 style='font-weight:bold;color:#000'>Search Results for: " . get_query_var('s') . "</h2></div>");
            while ($the_query->have_posts()) {
                $the_query->the_post();
        ?>
                <div class="container sclass">
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="container nt-found">
                <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
                <div class="alert alert-info">
                    <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
                </div>
            </div>
        <?php } ?>


    </div>
</div>


<?php get_footer(); ?>