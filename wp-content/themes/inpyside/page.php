<?php get_header(); ?>
<?php while (have_posts()): the_post(); ?>

 	<h1><?php the_title(); ?></h1>
 	<p><?php the_content(); ?></p>

	<button id="users-list-btn">Load users related blog list</button>
	<div id="users-list-container"></div>
	
<?php endwhile; ?>
<?php get_footer(); ?>