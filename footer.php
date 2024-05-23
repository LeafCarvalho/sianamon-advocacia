<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 infos-footer">
				<p><?php echo get_theme_mod('footer_address'); ?></p>
				<p><?php echo get_theme_mod('footer_cnpj'); ?></p>
				<!-- Instagram -->
				<a href="<?php echo esc_url( get_theme_mod('instagram_url') ); ?>">
					<img src="<?php echo get_template_directory_uri() . '/img/Ícone Insta.png'; ?>" alt="Instagram">
				</a>
				
				<!-- Facebook -->
				<a href="<?php echo esc_url( get_theme_mod('facebook_url') ); ?>">
				<img src="<?php echo get_template_directory_uri() . '/img/Ícone Facebook.png'; ?>" alt="Facebook">
				</a>

				<!-- Twitter -->
				<a href="<?php echo esc_url( get_theme_mod('x_url') ); ?>">
					<img src="<?php echo get_template_directory_uri() . '/img/Ícone X.png'; ?>" alt="Twitter">
				</a>

				<!-- LinkedIn -->
				<a href="<?php echo esc_url( get_theme_mod('linkedin_url') ); ?>">
					<img src="<?php echo get_template_directory_uri() . '/img/Ícone LinkedIn.png'; ?>" alt="LinkedIn">
				</a>
			</div>
			<div class="col-lg-6 footer-redes-sociais d-flex justify-content-end">
				<div class="logo-footer">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="logoFooter" src="<?php echo esc_url( get_theme_mod('footer_logo_image') ); ?>" alt="<?php bloginfo('name'); ?>" class="align-middle">
					</a>
				</div>	
			</div>
			<div class="col-12 text-center text-copyright">
				<p><?php echo get_theme_mod('footer_copyright'); ?></p>
				<span><?php echo get_theme_mod('footer_developed_by'); ?></span>
			</div>
		</div>
	</div>
</div> 

	<?php wp_footer(); ?>
    <?php personal_options('tag_body_footer'); ?>
</body>
</html> 