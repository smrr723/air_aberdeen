<?php 
  if ( is_page('all-topics') ):
    echo 
    '<div class="blog-header text-center">
        <h1>', get_the_title(), '</h1>
    <p class="site-author text-center" align="center">',
      get_bloginfo('description'), 
      '</p>
      </div>'
    ;
  elseif ( is_home() ):
    echo 
    '<div class="blog-header text-center">
        <h1>', "Air Aberdeen", '</h1>
    <p class="site-author text-center" align="center">',
      get_bloginfo('description'), 
      '</p>
      </div>'
    ;
  else:
    echo 
    '<div class="blog-header text-center">
        <h1>', get_the_title(), '</h1>
    </div>';
  endif;
