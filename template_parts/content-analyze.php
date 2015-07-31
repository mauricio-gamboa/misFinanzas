<section id="analyze" scroll-animate>
  <div class="container">
    <div class="row">
      
      <?php if(ot_get_option('im_gen_an_lisis')): ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hide-xs">
        <div class="analyze-wrapper">
          <img class="phone" src="<?php echo ot_get_option('im_gen_an_lisis'); ?>" alt=""/>
        </div>
      </div>
      <?php endif; ?>

      <?php if(ot_get_option('t_tulo_an_lisis') && ot_get_option('texto_an_lisis')): ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="analyze-wrapper auto">
          <h3 class="site-title-left hide-xs"><?php echo ot_get_option('t_tulo_an_lisis'); ?></h3>
          <h3 class="site-title-centered show-xs"><?php echo ot_get_option('t_tulo_an_lisis'); ?></h3>
          <?php echo ot_get_option('texto_an_lisis'); ?>
        </div>
      </div>
      <?php endif; ?>
      
      <?php if(ot_get_option('im_gen_an_lisis')): ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 show-xs">
        <div class="analyze-wrapper">
          <img class="phone" src="<?php echo ot_get_option('im_gen_an_lisis'); ?>" alt=""/>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>