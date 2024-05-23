<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-12">
			<?php if (have_posts()) : ?>

				<h2> <?php personal_options('titulo_search'); ?> </h2>

				<?php while (have_posts()) : the_post(); ?>

					<?php include (TEMPLATEPATH . '/inc/post-item.php' ); ?>

				<?php endwhile; ?>

			<?php else : ?>
				<h2><?php personal_options('titulo_not_search'); ?></h2>
			<?php endif; ?>
		</div>
	</div>
</div> 
<?php get_footer(); ?>
