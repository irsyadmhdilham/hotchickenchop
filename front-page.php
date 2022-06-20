<?php get_header(); ?>

<section id="home-page">

  <div id="hcc-hero-section">
  
    <div id="hcc-hero-content-container">

      <div id="hcc-hero-content-wrapper">

        <h1>The best <span>Chicken Chop<br/></span>in <span>Melaka</span></h1>
        <p>Cuba dulu baru tau, Rasa sekali pasti datang lagi</p>

      </div>

      <div id="hcc-hero-cta-wrapper">
        <a class="button" href="<?php echo site_url('/hubungi-kami'); ?>">Tempahan</a>
      </div>
  
    </div>
    <!-- #hcc-hero-content-container -->
  
    <img src="<?php echo get_template_directory_uri() . '/src/img/chicken_chop.jpeg' ?>" alt="chicken chop">

  </div>
  <!-- #hcc-hero-section -->

  <div id="hcc-social-proof">

    <h2>Apa kata mereka</h2>

    <div class="swiper-social-proof">
      <div class="swiper-wrapper">
        
        <?php for ($n = 0; $n < 10; $n++) : ?>
          <div class="hcc-social-proof-container swiper-slide">

            <?php 
              get_template_part('template-parts/social-proof', 'social proof', array(
                'img' => '/src/img/pelanggan_1.jpg',
                'name' => 'Nurul Atikah',
                'rating' => 5,
                'comment' => 'Makan kat sini memang best. Chicken chop dia memang paling sedap. Datang sini wajib makan chicken chop.'
              )); ?>

          </div>
        <?php endfor; ?>
        <!-- .hcc-social-proof-container swiper-slide -->

      </div>
      <!-- .swiper-wrapper -->

      <div class="swiper-pagination"></div>
      
    </div>
    <!-- .swiper -->

    <div onclick="socialProofNextButton()" id="swiper-next-button">
      <img src="<?php echo get_template_directory_uri() . '/src/img/nav-button.svg' ?>" alt="next button">
    </div>
    <div onclick="socialProofPrevButton()" id="swiper-prev-button">
      <img src="<?php echo get_template_directory_uri() . '/src/img/nav-button.svg' ?>" alt="next button">
    </div>

  </div>
  <!-- #hcc-social-proof -->

  <div id="hcc-best-selling">

    <!-- <div id="hcc-best-selling-container">
      
    </div> -->

    <img src="<?php echo get_template_directory_uri() . '/src/img/gamberoni.jpg'?>" alt="best selling image">
    
    <div id="hcc-best-selling-content">
      <h4>Best selling kami</h4>
      
      <div id="hcc-best-selling-rating">
        <?php for ($t = 0; $t < 5; $t++): ?>
          <img src="<?php echo get_template_directory_uri() . '/src/img/star.svg'; ?>" alt="star">
        <?php endfor; ?>
      </div>
      
      <h3>Spaghetti Gamberoni</h3>
  
      <p>Spaghetti pasta cooked with Prawn, garlic flakes, tomato dice and olive oil.</p>

      <div id="best-selling-button">
        <a href="<?php echo site_url('/menu'); ?>" class="button">Lihat Menu</a>
      </div>
    </div>
    <!-- #hcc-best-selling-content -->

  </div>
  <!-- #hcc-best-selling -->

  <div id="hcc-pizza">

    <div id="hcc-pizza-wrapper">
      <img src="<?php echo get_template_directory_uri() . '/src/img/pizza.png' ?>" alt="pizza">
  
      <div id="hcc-pizza-diagonal"></div>
      <h2>Pizza</h2>
  
      <div id="hcc-pizza-text-wrapper">
  
        <h1>Pizza</h1>
    
        <p>Jom try menu baru kami, pelbagai pizza kami ada seperti Margherita,  Beef Pepperoni dan sebagainya.</p>
  
        <div id="hcc-pizza-button">
          <a href="<?php echo site_url('/menu'); ?>">Lihat Menu</a>
        </div>
    
      </div>
      <!-- #hcc-pizza-text-wrapper -->

    </div>
    <!-- #hcc-pizza-wrapper -->
  </div>
  <!-- hcc-pizza -->

  <div id="hcc-customer-images">

    <div id="hcc-customer-images-text-container">
      <div id="hcc-images-text-wrapper">
        <div id="upper-line"></div>
        <h1>Mereka<br/>semua<br/><span>suka<br/>makanan<br/>kami</span></h1>
        <h2>Lets eat at<br/><span>Hot Chicken Chop</span></h2>
      </div>
    </div>
    <!-- #hcc-customer-images-text-container -->

    <div id="hcc-customer-images-container">
      <?php
        $images = array();
        for ($n = 1; $n <= 6; $n++) {
          array_push($images, get_template_directory_uri() . "/src/img/smile_{$n}.jpg");
        }
        foreach($images as $image) :
      ?>
        <img src="<?php echo $image; ?>" alt="image">
      <?php endforeach; ?>
    </div>
    <!-- #hcc-customer-images-container -->

  </div>
  <!-- #hcc-customer-images -->
  
  <div class="swiper-customer-image">
    <div class="swiper-wrapper">
    <?php for ($f = 0; $f < 4; $f++): ?>
      <div class="swiper-slide">
        <!-- <img src="<?php //echo get_template_directory_uri() . '/src/img/pelanggan_1.jpg'; ?>" alt="customer image"> -->
      </div>
    <?php endfor; ?>
    </div>
  </div>
  <!-- .swiper-customer-image -->

</section>
<!-- #home-page -->

<?php get_footer(); ?>