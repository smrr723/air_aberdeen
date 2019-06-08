<div class="blog-post">
	
	<?php 
		if ( is_home () || is_category() || is_archive() ) {
			echo '<h2 class="blog-post-title"><a href="', the_permalink() ,'">',  the_title(), '</a>'; 
			echo '</h2>';
		} 
		else {}
	?>
  <?php 
    if ( is_home () || is_category() || is_archive() ) {
      the_excerpt('');
    } else {
    the_content(); 
    }
    ?>
  <div class="blog-post-meta">
    <a href="#"><?php the_author(); ?></a>&nbsp&nbsp - &nbsp&nbsp
    <time><?php the_date(); ?></time>
    <div class="post-tags"><?php the_tags('', ',  &nbsp', ''); ?></div>
  </div>
</div><!-- /.blog-post -->


