<div class="post-meta">
  <?php the_title('<h2>', '</h2>');?>

  <div class="meta clearfix">
    <span><?php the_time('F j, Y'); ?></span><a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 'No Comentarios', '1 Comentario', '% Comentarios' ); ?></a>
  </div>
</div>
<?php the_content(); ?>