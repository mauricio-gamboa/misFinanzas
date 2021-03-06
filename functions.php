<?php

define('THEME_DIR', get_template_directory_uri());
define('SITE_URL', get_bloginfo('wpurl'));

function enqueue_styles() {
  // Load our main stylesheet.
  wp_register_style('main', get_stylesheet_uri(), array(), '1');
  wp_enqueue_style('main');
  
  wp_register_style('libs', THEME_DIR . '/public/styles/libs.min.css', array('main'), '1');
  wp_enqueue_style('libs');

  wp_register_style('styles', THEME_DIR . '/public/styles/styles.min.css', array('libs'), '1');
  wp_enqueue_style('styles');
}

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts() {
  wp_register_script('libs', THEME_DIR . '/public/js/libs.min.js', array(), '1', true);
  wp_enqueue_script( 'libs' );
  wp_register_script('main', THEME_DIR . '/public/js/main.min.js', array('libs'), '1', true);
  wp_localize_script('main', 'misFinanzasAPI', array('url' => SITE_URL . '/wp-json/posts'));
  wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (!function_exists('misFinanzas_setup')) {
  function misFinanzas_setup() {
    if ( function_exists('add_theme_support') ) {
      add_theme_support('post-thumbnails');
    }

    register_nav_menu('menu_uno',__( 'Principal' ));
    register_nav_menu('menu_dos',__( 'Responsive' ));
    register_nav_menu('menu_tres',__( 'Pie de Sitio' ));
  }
}

add_action('init', 'misFinanzas_setup');

function sean_park_law_widgets_init() {
  register_sidebar( array(
    'name'          => 'Widget Area',
    'id'            => 'sidebar-blog',
    'description'   => 'Add widgets here to appear in your sidebar.',
    'before_widget' => '<div id="%1$s" class="widget %2$s" add-icon>',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>'
  ) );
}

add_action( 'widgets_init', 'sean_park_law_widgets_init' );

function mytheme_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);

  if ( 'div' == $args['style'] ) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }

?>
  <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
  <?php if ( 'div' != $args['style'] ) : ?>
  <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
  <?php endif; ?>
  <h5><?php comment_author(); ?> <span><?php echo 'hace ' . human_time_diff( get_comment_time('U'), current_time('timestamp') ); ?></span></h5>
  <?php if ( $comment->comment_approved == '0' ) : ?>
    <p><em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em></p>
    <br />
  <?php endif; ?>

  <?php comment_text(); ?>

  <div class="reply">
      <?php echo preg_replace( '/comment-reply-link/', 'comment-reply-link ' . 'my-link link-2', 
      get_comment_reply_link(array_merge( $args, array(
        'add_below' => $add_below, 
        'reply_text' => 'Responder <i class="fa fa-chevron-right"></i>',
        'depth' => $depth, 
        'max_depth' => $args['max_depth']))), 1 );  
        ?>
  </div>
  
  <?php if ( 'div' != $args['style'] ) : ?>
  </div>
  <?php endif; ?>
<?php
}