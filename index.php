<?php get_header(); ?>
  <?php include 'site_header.php';?>

	<div class="row">
		<div class="col-md-10 col-md-offset-1 blog-main">

			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; endif;
			?>
      <?php include 'mailchimp-form.php';?>

		</div> <!-- /.blog-main -->

	</div> <!-- /.row -->
<?php get_footer(); ?>