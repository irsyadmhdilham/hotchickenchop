<?php get_header(); ?>

<section id="home-page">

  <div id="hcc-hero-section">
  
    <div id="hcc-hero-content-wrapper">
  
      <h1><span>Chicken Chop</span> yang paling padu ada di <span>Melaka</span></h1>
      <p>Cuba dulu baru tau, Rasa sekali pasti datang lagi</p>
      <div id="hcc-hero-cta-wrapper">
        <a class="button" href="<?php echo site_url('/hubungi-kami'); ?>">Tempahan</a>
      </div>
  
    </div>
  
    <div id="hcc-hero-scroll">
      <small>Scroll</small>
      <img src="<?php echo get_template_directory_uri() . '/src/img/down-arrow.svg' ?>" alt="scroll icon">
    </div>
  
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

  <div id="hcc-home-menu">
    <div id="hcc-home-menu-container">

      <div id="hcc-menu-best-selling-container">

        <img src="<?php echo get_template_directory_uri() . '/src/img/nasi_goreng_chicken_chop.jpg'?>" alt="best selling image">
        
        <div id="hcc-menu-best-selling-content-wrapper">
          <div id="hcc-menu-best-selling-content">
  
            <div id="hcc-menu-best-selling-heading-wrapper">
              <h4>Best selling kami</h4>
              <img src="<?php echo get_template_directory_uri() . '/src/img/thumb_up.svg'?>" alt="thumb up">
            </div>
            
            <h3>Nasi Goreng Chicken Chop</h3>
  
            <p>Crispy Chicken Chop with fried rice. Served with our cheese signature sauce and slices of cucumber.</p>

            <div id="hcc-menu-best-selling-social-proof">
              <?php get_template_part('template-parts/social-proof', 'social proof', array(
                'img' => '/src/img/pelanggan_1.jpg',
                'name' => 'Nurul Atikah',
                'rating' => 5,
                'comment' => 'Makan kat sini memang best. Chicken chop dia memang paling sedap. Datang sini wajib makan chicken chop.'
              )); ?>
            </div>
  
          </div>
          <!-- #hcc-menu-best-selling-content -->
        </div>
        <!-- #hcc-menu-best-selling-content-wrapper -->

      </div>
      <!-- #hcc-menu-best-selling-container -->

      <div id="hcc-menu-new-menu-container">

        <img src="<?php echo get_template_directory_uri() . '/src/img/pizza.jpg' ?>" alt="new menu">
        
        <div id="hcc-menu-new-menu-content-wrapper">
          <div id="hcc-menu-new-menu-content">
            <h4>Menu baru</h4>
      
            <h3>jom try pizza kami</h3>
      
            <p>Pelbagai jenis pizza kami hidangkan kepada anda</p>
          </div>
        </div>

      </div>
      <!-- #hcc-menu-new-menu-container -->

    </div>
    <!-- #hcc-home-menu-container -->

    <a href="<?php echo site_url('/menu') ?>" class="button">Lihat menu kami</a>

  </div>
  <!-- #hcc-home-menu -->

  <div id="hcc-customer-images">

    <div id="hcc-customer-image-title">
      <h2>Mereka Semua suka makanan kami</h2>
      <p>Simpan moment terindah di sini</p>
    </div>
    
    <div id="hcc-customer-image-container">
      <?php for ($x = 0; $x < 4; $x++): ?>
      <div class="hcc-customer-image-wrapper">
        <img src="<?php echo get_template_directory_uri() . '/src/img/pelanggan_1.jpg'; ?>" alt="customer image">
      </div>
      <?php endfor; ?>
    </div>
    
  </div>
  <!-- hcc-customer-images -->
  
  <div class="swiper-customer-image">
    <div class="swiper-wrapper">
    <?php for ($f = 0; $f < 4; $f++): ?>
      <div class="swiper-slide">
        <img src="<?php echo get_template_directory_uri() . '/src/img/pelanggan_1.jpg'; ?>" alt="customer image">
      </div>
    <?php endfor; ?>
    </div>
  </div>
  <!-- .swiper-customer-image -->

</section>
<!-- #home-page -->

<?php get_footer(); ?>