<div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="col-12 d-flex justify-content-center">
                        <h2>Nossos Números</h2>
                    </div>
                    <div class="col-lg-11 d-flex flex-lg-row flex-md-column flex-sm-column justify-content-center align-items-center">
                        <?php
                            $argsEstatisticas = array(
                                'post_type' => 'nossos_numeros',
                                'posts_per_page' => -1,
                                'orderby' => 'date',
                                'order' => 'ASC'
                            );
                            $query = new WP_Query($argsEstatisticas);
                            if ($query->have_posts()) : 
                                while ($query->have_posts()) : $query->the_post();
                                    $numero = get_field('numero');
                                    $descricao = get_field('descricao');
                                    ?>
                                    <div class="col-4 nossos-numeros-post d-flex justify-content-center align-items-center">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <h3>+<strong class="odometer" data-value="<?php echo esc_html($numero); ?>"></strong></h3>
                                            <p><?php echo esc_html($descricao); ?></p>
                                        </div>
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
