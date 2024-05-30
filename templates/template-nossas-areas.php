<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <h2>Nossas Áreas</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="nossas-areas-slider">
                <?php
                $args = array(
                    'post_type' => 'nossas_areas',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <div class="slider-item">
                            <div class="slider-item-content">
                                <?php the_post_thumbnail('full'); ?>
                                <div class="overlay">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="content"><?php the_content(); ?></div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Nenhuma área encontrada.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
