<footer id="hcc-footer">

  <section id="hcc-footer-wrapper">
    <div id="hcc-footer-left-section">
  
      <?php include 'src/img/logo.svg'; ?>
  
      <p>Lets eat at Hot Chicken Chop</p>
  
      <div id="hcc-footer-operating-hours">
  
        <h3>Waktu operasi</h3>
  
        <div class="hcc-footer-operating-hours-wrapper">
          <p>Selasa - Ahad</p>
          <p>6pm - 11pm</p>
        </div>
  
        <div class="hcc-footer-operating-hours-wrapper">
          <p>Isnin</p>
          <p>Tutup</p>
        </div>
  
      </div>
      <!-- #hcc-footer-operating-hours -->
  
    </div>
    <!-- #hcc-footer-left-section -->
  
    <div id="hcc-footer-middle-section">
  
      <h3>Hubungi kami</h3>
  
      <div id="hcc-footer-contact-info-container">
        <img id="hcc-footer-contact-address-icon" src="<?php echo get_template_directory_uri() . '/src/img/location.svg' ?>" alt="location">
        <p id="hcc-footer-contact-address">No 23,Jalan Ttc 26A,Taman Teknologi Cheng, 75260, Cheng, Melaka</p>
        <img id="hcc-footer-contact-phone-icon" src="<?php echo get_template_directory_uri() . '/src/img/phone.svg' ?>" alt="phone">
        <p id="hcc-footer-contact-phone">014-2666241</p>
      </div>
  
      <div id="hcc-footer-social-links">
        <?php include 'src/img/ig.svg'; ?>
        <?php include 'src/img/fb.svg'; ?>
        <?php include 'src/img/location.svg'; ?>
        <?php include 'src/img/waze.svg'; ?>
      </div>
  
    </div>
    <!-- #hcc-footer-middle-section -->
  
    <div id="hcc-footer-right-section">
  
      <div id="hcc-map"></div>
  
    </div>
    <!-- #hcc-footer-right-section -->
  </section>

  <div id="hcc-footer-copyright">
    <p>Copyright &copy; 2022 Western Food Melaka</p>
    <div></div>
    <p>Designed by <a href="https://irsyadilham.com" target="_blank">Irsyad Ilham</a></p>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>