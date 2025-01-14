<?php
// Template Name: Franchise Search
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

<?php

$industry = stripslashes($_GET["dpdlindustry"]);
$franchise = stripslashes($_GET["dpdlfranchise"]);
?>

<?php

if ($industry == "Industry" && $franchise == "Franchise") {
    $the_query = new WP_Query(array(
        'post_type' => 'franchise',
        'posts_per_page'      => -1,
        'paged' => $paged
    ));
} elseif ($industry != "" && $franchise == "Franchise") {
    $the_query = new WP_Query(array(
        'post_type' => 'franchise',
        'posts_per_page'      => -1,
        'paged' => $paged,
        'meta_query' => array(
            array(
                'key' => "industry_name",
                'value' => $industry,
                'compare' => 'LIKE'
            )
        )
    ));
} elseif ($industry != "" && $franchise != "") {

    $the_query = new WP_Query(array(
        'post_type' => "franchise",
        'posts_per_page'      => -1,
        'paged' => $paged,
        'meta_query' => array(
            array(
                'key' => "industry_name",
                'value' => $industry,
                'compare' => 'LIKE'
            ),
            array(
                'key' => "franchise_name",
                'value' => $franchise,
                'compare' => 'LIKE'
            )
        )
    ));
}

?>

<section class="fieldsection">
    <div class="container">
        <div class="row">
            <div class="allfield">
                <form action="" method="get">
                    <div class="col-md-3">
                        <select name="dpdlindustry" id="dpdlindustry">
                            <option>Industry</option>
                            <?php
                            if (have_rows('industry_name', 255)) {
                                while (have_rows('industry_name', 255)) {
                                    the_row();
                            ?>
                            <option value="<?php the_sub_field('name') ?>">
                                <?php the_sub_field('name') ?>
                            </option>
                            <?php }
                            }  ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="dpdlfranchise" id="dpdlfranchise">
                            <option>Franchise</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="dpdlstate">
                            <option>State</option>
                            <?php
                            if (have_rows('state_name', 255)) {
                                while (have_rows('state_name', 255)) {
                                    the_row();
                            ?>
                            <option value="<?php the_sub_field('name') ?>">
                                <?php the_sub_field('name') ?>
                            </option>
                            <?php  }
                            }  ?>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="" id="" placeholder="Amount">
                    </div>
                    <div class="col-md-1">
                        <button class="button" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="search-result row">
            <div class="com-md-12">
                <div class="heading-area">
                    <div>
                        <h2>Your Search Result for: </h2>
                        <p><span>Indutry:</span> <?php echo $industry ?></p>
                        <p><span>Franchise:</span> <?php echo $franchise; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="franchice-search fieldsection">
    <div class="container franchise-listing">
        <div class="row">
            <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="4000">
                <div class="brandbox">
                    <div class="image-area">
                        <img src="<?php the_field('franchise_logo'); ?>" alt="franchise logo">
                    </div>
                    <div class="">
                        <p class="franchise">
                            <b><?php the_field('franchise_name'); ?></b>
                        </p>
                        <div class="">
                            <div class="brands-content">
                                <p class="Categoryheading"><b>Industry : </b></p>
                                <p class="Categoryname">
                                    <?php the_field('industry_name'); ?>
                                </p>
                            </div>
                            <div class="brands-content">
                                <p class="Categoryheading"><b>Liquid Capital Required : </b></p>
                                <p class="Categoryname">$
                                    <?php echo number_format(get_field('liquid_capital')); ?>
                                </p>
                            </div>
                            <div class="brands-content">
                                <p class="Categoryheading"><b>Net Worth Required : </b></p>
                                <p class="Categoryname">$
										<?php echo number_format(get_field('new_worth')); ?>
                                </p>
                            </div>
                            <div class="brands-content">
                                <p class="headingamount"><b>Investment : </b></p>
                                <p class="Categoryprice">$
                                    <?php echo number_format(get_field('min_investment')) ?> - $
                                    <?php echo number_format(get_field('max_investment')) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="button-area">
                        <a href="<?php the_permalink(); ?>"><button class="btn1">Quick Look</button></a>
                        <button class="btn2 popmake-1376" data-franchise="<?php the_field('franchise_name'); ?>">Request Information</button>
                    </div>
                </div>
            </div>
            <?php endwhile;     ?>
        </div>
    </div>
</section>


<!--*********************** depedent script start *************************************-->
<script>
    jQuery(document).ready(function($) {
        let franchiseList = [
            <?php
            if (have_rows('franchises_name', 255)) {
                while (have_rows('franchises_name', 255)) {
                    the_row();
            ?> {
                        Industries: "<?php the_sub_field('industry', 255); ?>",
                        Franchise: "<?php the_sub_field('franchise', 255); ?>"
                    },
            <?php  }
            }   ?>
        ];

        $("#dpdlindustry").change(function() {
            $("#dpdlfranchise").html("<option selected>Franchise</option>");
            const states = franchiseList.filter(m => m.Industries == $("#dpdlindustry").val() || m.Industries == "Other");
            states.forEach(element => {
                const option = "<option val='" + element.Franchise + "'>" + element.Franchise + "</option>";
                $("#dpdlfranchise").append(option);
            });
        });
    });
</script>
<!--********************************* depedent script end *************************************-->



<?php get_footer();  ?>