  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="footer-top-top show-xs">
            <h1 class="logo small"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
          </div>
          <div class="footer-top clearfix">
            <p class="cuenta">visita <span>123 cuenta</span> y Aprende más sobre finanzas personales</p>

            <h1 class="logo small hide-xs"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
          </div>
          <div class="footer-medium">
            <?php wp_nav_menu(array('menu' => 'Pie de Sitio', 'container' => false, 'depth' => 1, 'menu_class' => 'list-inline')); ?>
          </div>

          <?php if(ot_get_option('texto_derechos')): ?>
          <div class="footer-bottom">
            <?php echo date('Y'); ?>&reg; <?php echo ot_get_option('texto_derechos'); ?>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>