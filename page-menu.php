<?php get_header(); ?>

<div id="hcc-menu">

  <h1>Menu kami</h1>

  <div id="hcc-menu-terpadu">

    <div class="hcc-menu-title">
      <div class="upper-line"></div>
      <h2>Menu terpadu</h2>
    </div>

    <div id="hcc-menu-terpadu-container">

      <?php for ($x = 0; $x < 3; $x++) : ?>
      <div class="hcc-menu-terpadu-wrapper">

        <img src="<?php echo get_template_directory_uri() . '/src/img/gamberoni.jpg' ?>" alt="menu image">

        <div class="hcc-menu-terpadu-text-container">

          <h3>Spaghetti Gamberoni</h3>

          <div class="hcc-menu-terpadu-rating">
            <?php for ($s = 0; $s < 5; $s++) : ?>
            <img src="<?php echo get_template_directory_uri() . '/src/img/star.svg' ?>" alt="star">
            <?php endfor; ?>
          </div>

          <p>Ayam goreng breaded, kentang putar, coleslaw dan sos black pepper.</p>

          <h3>RM12</h3>
        </div>
        <!-- #hcc-menu-terpadu-text-container -->

      </div>
      <!-- .hcc-menu-terpadu-wrapper -->
      <?php endfor; ?>

    </div>
    <!-- #hcc-menu-terpadu-container -->

  </div>
  <!-- #hcc-menu-terpadu -->

  <div id="hcc-menu-wrapper">

    <div id="hcc-menu-left-container">

      <div class="hcc-menu-card">
  
        <div class="hcc-menu-title">
          <div class="upper-line"></div>
          <h2>Western</h2>
        </div>
  
        <ul>
          <?php for ($l = 0; $l < 7; $l++) : ?>
          <li>
            <div class="hcc-menu-list-top-wrapper">
              <h3>Tenderloin steak</h3>
              <h3>RM15</h3>
            </div>
            <p>Daging batang pinang, sos black pepper, mashed potatoes, dan sayur goreng pilihan.</p>
          </li>
          <?php endfor; ?>
        </ul>
  
      </div>
      <!-- .hcc-menu-card -->

      <img src="<?php echo get_template_directory_uri() . '/src/img/pizza.jpg' ?>" alt="margherita">

    </div>
    <!-- #hcc-menu-left-container -->
    
    <div id="hcc-menu-right-container">

      <img id="hcc-menu-western-img" src="<?php echo get_template_directory_uri() . '/src/img/gamberoni.jpg' ?>" alt="gamberoni">

      <div class="hcc-menu-card">
  
        <div class="hcc-menu-title">
          <div class="upper-line"></div>
          <h2>Pizza</h2>
        </div>
  
        <ul>
          <?php for ($r = 0; $r < 5; $r++) : ?>
          <li>
            <div class="hcc-menu-list-top-wrapper">
              <h3>Margherita</h3>
              <h3>RM15</h3>
            </div>
            <p>Daging batang pinang, sos black pepper, mashed potatoes, dan sayur goreng pilihan.</p>
          </li>
          <?php endfor; ?>
        </ul>
      </div>
      <!-- .hcc-menu-card -->
  
    </div>
    <!-- #hcc-menu-right-container -->
  </div>
  <!-- #hcc-menu-wrapper -->

</div>
<!-- #hcc-menu -->

<?php get_footer(); ?>