<?php if(ot_get_option('link_de_twitter') || ot_get_option('link_de_facebook')): ?>
<div class="widget popular">
  <h4 class="widget-title">Redes Sociales</h4>
  <ul class="social list-unstyled clearfix">
  	<?php if(ot_get_option('link_de_twitter')): ?>
  	<li><a class="social-link twitter" href="<?php echo ot_get_option('link_de_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>Twitter</li>
  	<?php endif; ?>

  	<?php if(ot_get_option('link_de_facebook')): ?>
  	<li><a class="social-link facebook" href="<?php echo ot_get_option('link_de_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>Facebook</li>
  	<?php endif; ?>
  </ul>
</div>
<?php endif; ?>