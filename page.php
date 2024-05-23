<?php get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-12">				
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<div class="entry">
						<?php the_content(); ?>
					</div>
				</div>				
			</div>
		</div>
	</div>
<?php endwhile; endif;

get_footer(); ?>
