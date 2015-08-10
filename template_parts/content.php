<?php
$category = get_the_category();
$the_category_id = $category[0]->cat_ID;

if(function_exists('rl_color')) {
  $rl_category_color = rl_color($the_category_id);
}
?>

<article class="article clearfix">
  <div class="post-title-wrapper">
    <div class="featured-image">
      <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail( array(140, 140) ); ?>

        <?php if ($rl_category_color && function_exists('the_icon')): ?>
        <span style="background-color: <?php echo $rl_category_color; ?>;"><?php the_icon('size=small'); ?></span>
        <?php endif; ?>

      <?php endif; ?>
    </div>
    <div class="post-info show-s show-xs">
      <?php if ($rl_category_color): ?>
      <h2 style="color: <?php echo $rl_category_color; ?>;"><?php echo $category[0]->cat_name; ?></h2>
      <?php endif; ?>
  
      <?php the_title('<h1>', '</h1>'); ?>
      <div class="meta clearfix">
        <span><?php the_time('F j, Y'); ?></span>
        <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a>
      </div>
    </div>
  </div>
  <div class="clearfix show-s show-xs"></div>
  <div class="article-text">
    <div class="post-info hide-s hide-xs">
      <?php if ($rl_category_color): ?>
      <h2 style="color: <?php echo $rl_category_color; ?>;"><?php echo $category[0]->cat_name; ?></h2>
      <?php endif; ?>
    
      <?php the_title('<h1>', '</h1>'); ?>
      <div class="meta clearfix">
        <span><?php the_time('F j, Y'); ?></span>
        <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?></a>
      </div>
    </div>
    <div class="text">
      <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink(); ?>" class="my-link link-2">Leer más <i class="fa fa-chevron-right"></i></a>
  </div>
</article>