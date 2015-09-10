<section id="start">
  <img src="<?php bloginfo('template_directory'); ?>/public/images/lines-start-top.png" alt="" class="lines top home"/>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/lines-start-top-blog.png" alt="" class="lines top blog"/>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/lines-start-bottom.png" alt="" class="lines bottom"/>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php if(ot_get_option('texto_principal')): ?>
        <h3><?php echo ot_get_option('texto_principal'); ?></h3>
        <?php endif; ?>

        <?php if(ot_get_option('links_de_inicio_de_sesi_n')): ?>
        <div class="cta-wrapper hide-xs">
          <a href="<?php echo ot_get_option('links_de_inicio_de_sesi_n'); ?>" class="my-btn btn-1 gaIniciarCtaBottom" target="_blank">Iniciar sesión</a>
        </div>
        <?php endif; ?>

        <?php if(ot_get_option('links_de_inicio_de_sesi_n')): ?>
        <div class="cta-wrapper show-xs no-mobile" device-detector>
          <a href="<?php echo ot_get_option('links_de_inicio_de_sesi_n'); ?>" class="my-btn btn-1 gaIniciarCtaBottom" target="_blank">Iniciar sesión</a>
        </div>
        <?php endif; ?>

        <?php if(ot_get_option('link_apple_store')): ?>
        <div class="cta-wrapper show-xs ios" device-detector>
          <a href="<?php echo ot_get_option('link_apple_store'); ?>" class="my-btn btn-1" target="_blank">Descarga el App</a>
        </div>
        <?php endif; ?>

        <?php if(ot_get_option('link_google_play')): ?>
        <div class="cta-wrapper show-xs android" device-detector>
          <a href="<?php echo ot_get_option('link_google_play'); ?>" class="my-btn btn-1" target="_blank">Descarga el App</a>
        </div>
        <?php endif; ?>

        <p class="quotes-1"><span><span>¡Es gratis!</span></span></p>
      </div>
    </div>
  </div>
</section>