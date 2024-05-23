<?php get_header(); 

if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="container">
	<div class="row">
		<div class="col-12">			
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
					<?php include (TEMPLATEPATH . '/inc/share.php' ); ?>
					<div class="boxImg">
						<!--
						//Imagem destaque:
						$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
						//Como pegar outra resolução:
						$image_mobile = wp_get_attachment_image_url(get_post_thumbnail_id($post->ID), 'medium');
						//Tamanhos disponivies: large, medium_large, medium, thumbnail
						//Troca de imagem é feita por CSS: 
						//Exemplo:
						
						#background {
						     background-image: url('<?php echo $image; ?>');
						} 
						@media (max-width: 576px) { 
						    #background {
						         background-image: url('<?php echo $image_mobile; ?>');
						    } 
						} ?>

						-->
						<?php if(has_post_thumbnail()) {
							$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
							
							?>
							<div style="background-image: url('<?php echo $image; ?>')" class="imagemDestaque"></div>
							<?php } else { ?>
							<div class="imagemDestaque" style="background: url('<?php echo esc_url( get_template_directory_uri() ) ;?>/img/logo.png')"></div>
							<?php } ?>
						</div>
						<div class="entry">
							
							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

							<?php the_tags( 'Tags: ', ', ', ''); ?>
						</div>
					</div>
					<?php edit_post_link('Editar isso?','','.'); ?>
					<?php //comments_template(); ?>				
			</div>
		</div>
	</div>  
	<?php endwhile; endif;
	
	get_footer(); ?>