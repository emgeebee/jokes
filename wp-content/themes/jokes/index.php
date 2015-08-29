<!DOCTYPE html>
<head>
<title><?php get_bloginfo( 'description', 'display' ) ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<div id="container">
	<div id="content" role="main">
	 <?php query_posts('orderby=rand&posts_per_page=1'); ?>
		<div class="entry-content">
			<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
				// Reset Query
				wp_reset_query();
			?>
		</div><!-- .entry-content -->
	</div><!-- #content -->
</div><!-- #container -->