<?php get_header(); ?>

<section id="blog-header" class="header general">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>Esa página no se puede encontrar.</h1>
      </div>
    </div>
  </div>
  <img src="<?php bloginfo('template_directory'); ?>/public/images/bg-general-header.png" alt="" class="pikes">
</section>

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="content">
          <p>Parece que no se encontró nada en este lugar.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'start'); ?>

<?php get_footer(); ?>