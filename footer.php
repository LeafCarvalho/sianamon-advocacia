<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex footerContent">
                <div class="col-lg-6 col-md-12 mb-3 infos-footer">
                    <div>
                        <p><?php echo get_theme_mod('footer_address'); ?></p>
                        <p><?php echo get_theme_mod('footer_cnpj'); ?></p>
                        <!-- Redes Sociais -->
                        <div class="social-icons">
                            <a href="<?php echo esc_url(get_theme_mod('instagram_url')); ?>" class="me-2">
                                <img src="<?php echo get_template_directory_uri() . '/img/Ícone Insta.png'; ?>" alt="Instagram">
                            </a>
                            <a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>" class="me-2">
                                <img src="<?php echo get_template_directory_uri() . '/img/Ícone Facebook.png'; ?>" alt="Facebook">
                            </a>
                            <a href="<?php echo esc_url(get_theme_mod('x_url')); ?>" class="me-2">
                                <img src="<?php echo get_template_directory_uri() . '/img/Ícone X.png'; ?>" alt="Twitter">
                            </a>
                            <a href="<?php echo esc_url(get_theme_mod('linkedin_url')); ?>">
                                <img src="<?php echo get_template_directory_uri() . '/img/Ícone LinkedIn.png'; ?>" alt="LinkedIn">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Logo do Footer -->
                <div class="col-lg-6 col-md-12 mb-3 d-flex align-items-center justify-content-lg-end justify-content-center">
                    <div class="logo-footer">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img class="logoFooter" src="<?php echo esc_url(get_theme_mod('footer_logo_image')); ?>" alt="<?php bloginfo('name'); ?>" class="align-middle">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Copyright -->
            <div class="col-12 d-flex justify-content-between align-items-center text-copyright">
                <div>
					<p><?php echo get_theme_mod('footer_copyright'); ?></p>
				</div>
                <div>
					<span><?php echo get_theme_mod('footer_developed_by'); ?></span>
				</div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<?php personal_options('tag_body_footer'); ?>
</body>
</html>
