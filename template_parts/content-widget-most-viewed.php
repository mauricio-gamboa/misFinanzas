<div class="widget popular">
  <h4 class="widget-title"><span><i class="fa fa-eye"></i></span> Entradas más vistas</h4>
    <?php 
    if (function_exists('wpp_get_mostpopular')) {
      wpp_get_mostpopular(
        'wpp_start="<div class=\'articles\'>"&wpp_end="</div>"
        &limit="3"
        &thumbnail_width="67"
        &thumbnail_height="67"
        &excerpt_length="145"
        &post_html="
        <article class=\'article-small\'>
          <div class=\'meta clearfix\'>
            {thumb_img}
            <h3><a href=\'{url}\'>{text_title}</a></h3>
            <span>{date}</span>
          </div>
          <div class=\'article-text\'>
            <p>{summary}</p>
          </div>
        </article>"'
        );
      }?>
</div>