<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-10 offset-1">
                <div class="col-12 d-flex justify-content-center">
                    <h2>Nossos Números</h2>
                </div>
                <div class="row">
                    <?php
                        $argsEstatisticas = array(
                            'post_type' => 'nossos_numeros',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $query = new WP_Query($argsEstatisticas);
                        if ($query->have_posts()) : 
                            while ($query->have_posts()) : $query->the_post();
                                $numero = get_field('numero');
                                $descricao = get_field('descricao');
                                ?>
                                <div class="col-lg-4 nossos-numeros-post">
                                    <h3><strong></strong> <?php echo esc_html($numero); ?></h3>
                                    <p><strong></strong> <?php echo esc_html($descricao); ?></p>
                                </div>
                                <?php
                            endwhile; 
                        else : ?>
                            <p>Nenhum post encontrado.</p>
                            <?php
                        endif;
                        // Reset post data
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
