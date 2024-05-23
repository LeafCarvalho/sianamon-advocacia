<?php
/**
* Template Name: Página de Contato
*
* @package WordPress
* @author Mais Code Tecnologia
* @since First Version
*/
get_header(); 

if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12">            
                <div class="post" id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>                    
                    <?php the_content(); ?>                    
                </div>
            </div>
            <div class="col-12">
                <?php include (TEMPLATEPATH . '/inc/template-mapa.php' ); ?>
            </div>
        </div>
    </div>    

<?php endwhile; endif;

function scriptContact7(){ ?>

<script>
    //VALIDADOR GENÉRICO CONTACT - 7
    //Para campo requerido geral colocar a class "mc-required".
    //Para CPF "mc-cpf".
    //Para CNPJ "mc-cnpj".
    //Para email "mc-email".
    //Para select "mc-required", mas somente se o primeiro campo for colocado como placeholder.
    $('.wpcf7-submit').on('click', function (e) {
        validadeFields();
        if(isValid == false) {
            e.preventDefault();
        }
    });
    function validadeFields(){
        $('input').siblings('p').remove();
        $('select').siblings('p').remove();
        $('.wpcf7 input').each(function(){
            var isValid = true;
            if($(this).hasClass('mc-required')) {
                if($(this).val() == ''){
                    $(this).after('<p class="error">Campo obrigatório!</p>');
                    isValid = false;
                }
            } else if ($(this).hasClass('mc-cpf')) {
                if(!validateCPF($(this).val())){
                    $(this).after('<p class="error">CPF Inválido</p>');
                    isValid = false;
                }
            } else if ($(this).hasClass('mc-cnpj')) {
                if(!validateCNPJ($(this).val())){
                    $(this).after('<p class="error">CNPJ Inválido</p>');
                    isValid = false;
                }
            } else if ($(this).hasClass('mc-email')) {
                if(!validateEmail($(this).val())){
                    $(this).after('<p class="error">Email Inválido</p>');
                    isValid = false;
                }
            }
        });
        //SOMENTE SE O PRIMEIRO CAMPO FOR USADO COMO PLACEHOLDER
        $('.wpcf7 select').each(function(){
            if($(this).hasClass('mc-required')) {
                if ($(this).children('option:first-child').is(':selected')) {
                    $(this).after('<p class="error">Campo obrigatório!</p>');
                    isValid = false;
                }
            }
        });
        return isValid;
    }
    function validateCPF(cpf) {
        cpf = cpf.replace('.','');
        cpf = cpf.replace('.','');
        cpf = cpf.replace('-','');
        if(cpf == '') {
            return false;
        }
        if(cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999") {
            return false;
        }
        var a = [];
        var b = new Number;
        var c = 11;
        for (i=0; i<11; i++){
            a[i] = cpf.charAt(i);
            if(i < 9) b += (a[i] * --c);
        }
        if ((x = b % 11) < 2) { a[9] = 0 } else { a[9] = 11-x }
            b = 0;
        c = 11;
        for (y=0; y<10; y++) b += (a[y] *  c--);
            if ((x = b % 11) < 2) { a[10] = 0; } else { a[10] = 11-x; }
        status = a[9] + ""+ a[10]
        if ((cpf.charAt(9) != a[9]) || (cpf.charAt(10) != a[10])){
            return false;
        }
        return true;
    }
    function validateCNPJ(cnpj) {
        cnpj = cnpj.replace(/[^\d]+/g, '');
        if (cnpj == '') return false;
        if (cnpj.length != 14)
            return false;
        if (cnpj == "00000000000000" ||
            cnpj == "11111111111111" ||
            cnpj == "22222222222222" ||
            cnpj == "33333333333333" ||
            cnpj == "44444444444444" ||
            cnpj == "55555555555555" ||
            cnpj == "66666666666666" ||
            cnpj == "77777777777777" ||
            cnpj == "88888888888888" ||
            cnpj == "99999999999999")
            return false;
        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0))
            return false;

        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            return false;

        return true;
    }
    function validateEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>

<?php }
add_action('wp_footer', 'scriptContact7', 100);

get_footer(); ?>