<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-lg-row flex-md-column-reverse flex-sm-column-reverse justify-content-between">
            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <h2><?php the_field('titulo_quem_somos') ?></h2>
                <p><?php the_field('descricao_quem_somos') ?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php the_field('imagem_quem_somos') ?>" alt="">
            </div>
        </div>
    </div>
</div>