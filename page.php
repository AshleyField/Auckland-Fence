<?php get_header();

	while(have_posts()) {
		the_post(); ?>
		<div class="single-page">
			<?php the_content(); } ?>
		</div>
		

<?php get_footer() ?>