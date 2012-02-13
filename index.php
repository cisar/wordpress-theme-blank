<?php get_header(); ?>

<div class="content">
	<?php while(have_posts()) : the_post(); ?>
			<div class="content-title"><?php the_title(); ?></div>
			<?php the_content(); ?>
	<?php endwhile; ?>
</div>

<?php get_footer(); ?>