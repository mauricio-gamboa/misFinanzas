<section id="start">
  <img src="<?php bloginfo('template_directory'); ?>/public/images/lines-start-top.png" alt="" class="lines top"/>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/lines-start-bottom.png" alt="" class="lines bottom"/>

  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php if(ot_get_option('texto_principal')): ?>
        <h3><?php echo ot_get_option('texto_principal'); ?></h3>
        <?php endif; ?>

        <?php if(ot_get_option('link_de_registro')): ?>
        <div class="hide-xs">
          <a href="<?php echo ot_get_option('link_de_registro'); ?>" class="my-btn btn-1" target="_blank">¡registrate Ahora!</a>
        </div>
        <?php endif; ?>

        <?php if(ot_get_option('link_descargar_app')): ?>
        <div class="show-xs">
          <a href="<?php echo ot_get_option('link_descargar_app'); ?>" class="my-btn btn-1" target="_blank">Descarga el App</a>
        </div>
        <?php endif; ?>  

        <p class="quotes-1"><span><span>¡Es gratis!</span></span></p>
      </div>
    </div>
  </div>
</section>