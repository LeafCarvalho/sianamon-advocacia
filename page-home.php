<?php
/**
* Template Name: Página Home
*
* @package WordPress
* @author Mais Code Tecnologia
* @since First Version
*/
get_header();
?>

<section id="conteudo-topo">
  <?php
  get_template_part('templates/template', 'conteudo-topo');
  ?>
</section>

<section id="quem-somos">
  <?php
  get_template_part('templates/template', 'quem-somos');
  ?>
</section>

<section id="nossos-numeros">
  <?php
  get_template_part('templates/template', 'nossos-numeros');
  ?>
</section>

<section id="nossas-areas">
  <?php
  get_template_part('templates/template', 'nossas-areas');
  ?>
</section>

<section id="nossos-contatos">
  <?php
  get_template_part('templates/template', 'nossos-contatos');
  ?>
</section>

<div class="container">
    <div class="row">
      <div class="col-12">
        teste
        <?php
$whatsapp_url = 'https://wa.me/55' . get_theme_mod('numero_whatsapp') . '?text=' . urlencode(get_theme_mod('mensagem_wpp'));
?>
      <a href="<?php echo $whatsapp_url; ?>" target="_blank">WhatsApp</a>
      </div>
    </div>
</div>

<?php
get_footer(); ?>