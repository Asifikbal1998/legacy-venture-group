<?php
// Template Name: Brands
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

<section class="fieldsection">
    <div class="container">
        <div class="brand-content">
            <?php the_content(); ?>
        </div>
        <div class="row">
            <div class="allfield">
                <form action="search" method="get">
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
    </div>
    <div class="container brands-list">
        <div class="row">
            <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;  ?>
            <?php
            $BlogList = new WP_Query(array(
                'post_type'            => 'franchise',
                'posts_per_page'      => 42,
                'paged' => $paged,
                'orderby'   => 'meta_value',
                'order' => 'ASC',
                'post_status'         => 'publish',
                'meta_value'          => '1'
            ));
            ?>

            <?php
            while ($BlogList->have_posts()) : $BlogList->the_post();
            ?>
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
            <div class="pasenation">
                <?php wp_pagenavi(array('query' => $BlogList)) ?>
            </div>
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

<?php get_footer(); ?>