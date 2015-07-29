<div id="video-modal" class="modal fade" stop-video tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <?php if(ot_get_option('video')): ?>
      <div class="videoWrapper">
        <?php echo ot_get_option('video'); ?>
      </div>
      <?php endif; ?>
      
      <div class="store-links">
        <?php if(ot_get_option('link_apple_store')): ?>
        <a href="<?php echo ot_get_option('link_apple_store'); ?>" class="link-store apple-store" target="_blank">Apple Store</a>
        <?php endif; ?>
        
        <?php if(ot_get_option('link_google_play')): ?>
        <a href="<?php echo ot_get_option('link_google_play'); ?>" class="link-store google-store" target="_blank">Google Store</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>