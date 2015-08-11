<?php get_header(); ?>

<?php get_template_part('template_parts/content', 'header-page'); ?>

<?php get_template_part('template_parts/content', 'breadcrumbs'); ?>

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <?php if ( have_posts() ) : ?>
        <div class="content">
          <?php while ( have_posts() ) : the_post(); get_template_part( 'template_parts/content', 'page'); endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sidebar-wrapper">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'start'); ?>

<?php get_footer(); ?>