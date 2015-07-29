<section id="options">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-5">
        <div class="options-text first">

          <?php if(ot_get_option('texto_sucursal_electr_nica')): ?>
          <h4><?php echo ot_get_option('texto_sucursal_electr_nica'); ?></h4>
          <?php endif; ?>

          <?php if(ot_get_option('link_solicita_usuario')): ?>
          <div class="links clearfix">
            <a href="<?php echo ot_get_option('link_solicita_usuario'); ?>" class="my-btn btn-2" target="_blank">solicita tu usuario </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5 col-lg-offset-2 col-lg-5">
        <div class="options-text last">

          <?php if(ot_get_option('texto_cliente')): ?>
          <h4><?php echo ot_get_option('texto_cliente'); ?></h4>
          <?php endif; ?>

          <div class="links clearfix">
            <?php if(ot_get_option('link_solicita_cuenta')): ?>
            <a href="<?php echo ot_get_option('link_solicita_cuenta'); ?>" class="my-btn btn-3" target="_blank">solicita tu CUENTA</a>
            <?php endif; ?>
            
            <?php if(ot_get_option('link_solicita_tarjeta')): ?>
            <a href="<?php echo ot_get_option('link_solicita_tarjeta'); ?>" class="my-btn btn-3" target="_blank">solicita tu TARJETA</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>