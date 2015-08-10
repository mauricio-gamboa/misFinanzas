<?php get_header(); ?>

<?php get_template_part('template_parts/content', 'header-blog'); ?>

<?php get_template_part('template_parts/content', 'breadcrumbs'); ?>

<section id="content">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <div class="content">
          <?php if ( have_posts() ) : ?>
          <div class="articles">
          <?php while ( have_posts() ) : the_post(); get_template_part( 'template_parts/content', get_post_format() ); endwhile; ?>
          </div>
          <div class="my-pagination"><?php the_posts_pagination( array(
            'prev_text' => '<i class="fa fa-caret-left"></i>',
            'next_text' => '<i class="fa fa-caret-right"></i>') ); 
            ?></div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sidebar-wrapper">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/content', 'start'); ?>

<?php get_footer(); ?>