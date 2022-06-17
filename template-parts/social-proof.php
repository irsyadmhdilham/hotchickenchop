<div class="hcc-social-proof-wrapper">

  <img src="<?php echo get_template_directory_uri() . $args['img']; ?>" alt="customer">

  <h4><?php echo $args['name']; ?></h4>

  <div class="hcc-social-proof-star-wrapper">
    <?php for ($x = 0; $x < $args['rating']; $x++): ?>
      <img src="<?php echo get_template_directory_uri() . '/src/img/star.svg' ?>" alt="rating star">
    <?php endfor; ?>
  </div>

  <p><?php echo $args['comment']; ?></p>

</div>