<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-12 col-sm-8 ">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<?php include (TEMPLATEPATH . '/inc/post-item.php' ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<h2>Nada Encontrado</h2>

		<?php endif; ?>	
	</div>
	<div class="col-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
<?php get_footer(); ?>
