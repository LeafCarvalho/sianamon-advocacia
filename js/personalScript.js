jQuery(document).ready(function($) {
    // Função para navegar até a seção
    function navigateToSection(hash) {
        var target = $(hash);
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 200);
        }
    }

    // Intercepta cliques nos links
    $(document).on('click', 'a', function(event) {
        var url = $(this).attr('href');
        var hash = this.hash;

        if (url.startsWith(window.location.origin)) {
            event.preventDefault();
            if (hash) {
                // Navega até a seção correspondente e remove o hash da URL visível
                navigateToSection(hash);
                history.pushState(null, null, ' ');
            } else {
                // Rola para o topo da página se não houver hash
                $('html, body').animate({ scrollTop: 0 }, 800);
                history.pushState(null, null, ' ');
            }
        }
    });

    // Trata navegação usando setas voltar/avançar.
    $(window).on('popstate', function() {
        var hash = location.hash;
        if (hash) {
            navigateToSection(hash);
        } else {
            $('html, body').animate({ scrollTop: 0 }, 800);
        }
    });

    // Navega para a seção especificada pelo hash na URL ao carregar a página
    $(window).on('load', function() {
        var hash = window.location.hash;
        if (hash) {
            navigateToSection(hash);
        }
    });

    // Reexecuta script após navegação
    function reinitializeScripts() {
        $('.nossas-areas-slider').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            arrows: true,
            dots: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true,
                    }
                },
            ]
        });

        // Inicia contador só quando usuário visualizar elemento
        if ('IntersectionObserver' in window) {
            var odometerObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        startCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            $('.odometer').each(function() {
                odometerObserver.observe(this);
            });
        } else {
            $('.odometer').each(function() {
                startCounter(this);
            });
        }
    }
    // Função contador
    function startCounter(element) {
        var $this = $(element);
        var finalValue = parseInt($this.data('value'), 10);
        var currentValue = 0;
        var increment;

        if (finalValue <= 500) {
            increment = 3;
        } else if (finalValue <= 5000) {
            increment = 50;
        } else {
            increment = 40000;
        }

        function updateValue() {
            if (currentValue < finalValue) {
                currentValue += increment;
                if (currentValue > finalValue) {
                    currentValue = finalValue;
                }
                $this.text(currentValue);
                setTimeout(updateValue, 50);
            }
        }

        updateValue();
    }

    reinitializeScripts();
});

// abre mobile
$(document).on("click","#secHeader .fechar-menu-mobile",function(){
    $("#open-submenu-mobile").css("right","-100%")
});
// fecha mobile
$(document).on("click","#secHeader .btn-open-submenu",function(){
    $("#open-submenu-mobile").css("right","0")
});