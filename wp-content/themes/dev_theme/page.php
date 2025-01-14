<?php get_header(); ?>

<?php if (is_page(1292)) { ?>
  <section class="inner-banner" style="background-image: url('<?php the_post_thumbnail_url('thumbnail'); ?>');">
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

  <!-- industry -->
  <section class="industry">
    <div class="industryimg">
      <img class="insimg" src="images/processimg.png" alt="">
      <div class="allinsbox">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="heading">
                <h5 class="">
                  <div class="loader"></div> Franchise Industry <div class="loader"></div>
                </h5>
                <?php the_content(); ?>
              </div>
            </div>
          </div>

          <div class="row">
            <?php $franchiseBrands = get_field('franchise_industry', 20); ?>
            <div class="col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
              data-aos-duration="500">
              <div class="industrybox">
                <div class="industryname">
                  <ul>
                    <li><?php echo $franchiseBrands[0]['name']; ?></li>
                    <li><?php echo $franchiseBrands[1]['name']; ?></li>
                    <li><?php echo $franchiseBrands[2]['name']; ?></li>
                    <li><?php echo $franchiseBrands[3]['name']; ?></li>
                    <li><?php echo $franchiseBrands[4]['name']; ?></li>
                    <li><?php echo $franchiseBrands[5]['name']; ?></li>
                    <li><?php echo $franchiseBrands[6]['name']; ?></li>
                    <li><?php echo $franchiseBrands[7]['name']; ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
              data-aos-duration="500">
              <div class="industrybox">
                <div class="industryname">
                  <ul>
                    <li><?php echo $franchiseBrands[8]['name']; ?></li>
                    <li><?php echo $franchiseBrands[9]['name']; ?></li>
                    <li><?php echo $franchiseBrands[10]['name']; ?></li>
                    <li><?php echo $franchiseBrands[11]['name']; ?></li>
                    <li><?php echo $franchiseBrands[12]['name']; ?></li>
                    <li><?php echo $franchiseBrands[13]['name']; ?></li>
                    <li><?php echo $franchiseBrands[14]['name']; ?></li>
                    <li><?php echo $franchiseBrands[15]['name']; ?></li>
                    <li><?php echo $franchiseBrands[16]['name']; ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
              data-aos-duration="500">
              <div class="industrybox">
                <div class="industryname">
                  <ul>
                    <li><?php echo $franchiseBrands[17]['name']; ?></li>
                    <li><?php echo $franchiseBrands[18]['name']; ?></li>
                    <li><?php echo $franchiseBrands[19]['name']; ?></li>
                    <li><?php echo $franchiseBrands[20]['name']; ?></li>
                    <li><?php echo $franchiseBrands[21]['name']; ?></li>
                    <li><?php echo $franchiseBrands[22]['name']; ?></li>
                    <li><?php echo $franchiseBrands[23]['name']; ?></li>
                    <li><?php echo $franchiseBrands[24]['name']; ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
              data-aos-duration="500">
              <div class="industrybox">
                <div class="industryname">
                  <ul>
                    <li><?php echo $franchiseBrands[25]['name']; ?></li>
                    <li><?php echo $franchiseBrands[26]['name']; ?></li>
                    <li><?php echo $franchiseBrands[27]['name']; ?></li>
                    <li><?php echo $franchiseBrands[28]['name']; ?></li>
                    <li><?php echo $franchiseBrands[29]['name']; ?></li>
                    <li><?php echo $franchiseBrands[30]['name']; ?></li>
                    <li><?php echo $franchiseBrands[31]['name']; ?></li>
                    <li><?php echo $franchiseBrands[32]['name']; ?></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

<?php  }  ?>

<?php get_footer(); ?>