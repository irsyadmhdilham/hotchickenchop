<?php get_header(); ?>

  <div id="hcc-hubungi-kami">

    <img src="<?php echo get_template_directory_uri() . '/src/img/restaurant.jpg' ?>" alt="steak">

    <div id="hcc-hubungi-kami-container">

      <h1>Hubungi kami</h1>

      <p>Anda ada cadangan atau ada sesuatu nak berhubungan dengan kami. Sila tinggalkan mesej dan kami akan cuba untuk memberikan maklum balas.</p>

      <form action="#">

        <div class="hcc-contact-field">
          <label for="hcc-contact-nama">Nama</label>
          <input type="text" name="nama" id="hcc-contact-nama">
          <small id="hcc-contact-nama-error">Sila isi nama anda</small>
        </div>

        <div class="hcc-contact-field">
          <label for="hcc-contact-email">Email</label>
          <input type="email" name="email" id="hcc-contact-email">
          <small id="hcc-contact-email-blank-error">Sila isi email anda</small>
          <small id="hcc-contact-email-format-error">Sila masukkan email dengan format yang betul</small>
        </div>

        <div class="hcc-contact-field">
          <label for="hcc-contact-mesej">Mesej</label>
          <textarea name="mesej" id="hcc-contact-mesej" cols="30" rows="10"></textarea>
          <small id="hcc-contact-message-blank-error">Sila taip mesej</small>
        </div>

        <button id="hcc-contact-submit-button" type="submit">Hantar</button>

      </form>

    </div>

  </div>

<?php get_footer(); ?>