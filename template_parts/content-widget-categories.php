<?php $categories = get_categories('exclude=1');  ?>

<?php if($categories): ?>
<div class="widget widget_categories" add-icon>
  <h4 class="widget-title">Categories</h4>
  
  <ul class="list-unstyled">

    <?php foreach ($categories as $category) : ?>
    <?php $rl_category_color = rl_color($category->cat_ID); ?>

    <li>
      <a href="<?php echo get_category_link( $category->term_id ); ?>">
        <span class="cat-icon-wrapper" style="background-color: <?php echo $rl_category_color; ?>;"><?php the_icon(array('size' => 'small', 'class' => 'cat_icon'), $term_type = 'category', $id = $category->cat_ID, $use_term_id = $category->term_id); ?></span> <?php echo $category->name; ?>
      </a>
    </li>
    <?php endforeach; ?>
  
  </ul>

</div>
<?php endif; ?>