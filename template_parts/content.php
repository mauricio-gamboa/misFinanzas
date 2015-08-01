<article class="article clearfix">
  <div class="featured-image">
    <?php if ( has_post_thumbnail() ): ?>
    <?php the_post_thumbnail( array(140, 140) ); ?>
    <?php endif; ?>
  </div>
  <div class="article-text">
    <!-- <h2>Vivamus sit amet</h2> -->
    <?php the_title('<h1>', '</h1>'); ?>
    <div class="meta clearfix">
      <span><?php the_time('F j, Y'); ?></span>
      <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a>
    </div>
    <div class="text">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="my-link link-2">Leer más <i class="fa fa-chevron-right"></i></a>
  </div>
</article>