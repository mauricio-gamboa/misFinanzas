<div id="comments" class="comments-wrapper detail-section">
  <h4><?php comments_number( 'No Comentarios', '1 Comentario', '% Comentarios' ); ?></h4>

  <?php if ( have_comments() ) : ?>
  <div class="comments">
    <?php wp_list_comments( array('style' =>'div', 'callback' => 'mytheme_comment' ) ); ?>
  </div>
  <?php endif; ?>
</div>

<?php get_template_part('template_parts/content', 'comments-form'); ?>