<?php /* Template Name: Tags */ ?>

<?php get_header(); ?>
	<?php include 'site_header.php';?>

	<div class="row">
		<div class="col-sm-8 col-sm-offset-2 blog-main">

			<?php

			$terms = get_terms();

			if ( !empty( $terms ) && !is_wp_error( $terms ) ){    
			$term_list = [];    
			foreach ( $terms as $term ){
			    $first_letter = strtoupper($term->name[0]);
			    $term_list[$first_letter][] = $term;
			}
			unset($term);

			echo '<ul class="all-topics">';

			    foreach ( $term_list as $key=>$value ) {
			        echo '<h2 class="term-letter">' . $key . '</h2>';

			        foreach ( $value as $term ) {
			            echo '<li><a href="' . get_term_link( $term ) . '" title="' . sprintf(__('View all post filed under %s', 'my_localization_domain'), $term->name) . '">'     . $term->name . '</a></li>';
			        }
			    }

			echo '</ul>';
			} 
			?>
			<?php include 'mailchimp-form.php';?>

		</div> <!-- /.blog-main -->
	</div> <!-- /.row -->
<?php get_footer(); ?>