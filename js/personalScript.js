$(document).on("click","#secHeader .fechar-menu-mobile",function(){
  $("#open-submenu-mobile").css("right","-100%")
});
 $(document).on("click","#secHeader .btn-open-submenu",function(){
  $("#open-submenu-mobile").css("right","0")
});


$(document).on("click","#secHeader nav .lupa-pesquisa,#secHeader nav .lupa-pesquisa img",function(){
$("#secHeader nav .telacheia-pesquisa").show();
$("body").addClass("esconder-scroll");
});

$(document).on("click",".telacheia-pesquisa .fechar-menu-telacheia i",function(){
$("#secHeader nav .telacheia-pesquisa").hide()
$("body").removeClass("esconder-scroll");
});

$(document).keyup(function(e) {
 if (e.key === "Escape") { 
  if(document.querySelector('.telacheia-pesquisa').style.display == 'block'){
    $("#secHeader nav .telacheia-pesquisa").hide()
    $("body").removeClass("esconder-scroll");
  }
 }
});
var alturaHeader = $("header").height();
$(document).scroll(function() {
  if($(window).scrollTop() >= 150){
    $("#btn-subir-topo").show("slow")
  }else{
    $("#btn-subir-topo").hide("slow");
  }

  if($(window).scrollTop() > 60){
    $("header nav").addClass("navbar-fixa");
  }else{
   $("header nav").removeClass("navbar-fixa")
 }
});
$(document).on("click","#btn-subir-topo",function(e) {
e.preventDefault();
window.scrollTo(0, 0);
});


jQuery(document).ready(function($) {
  $('.nossas-areas-slider').slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: true,
      dots: true,
      responsive: [
          {
              breakpoint: 1024,
              settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                  infinite: true,
                  dots: true
              }
          },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
              }
          },
          {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
              }
          }
      ]
  });
});

$(document).ready(function() {
  $('.odometer').each(function() {
      var $this = $(this);
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
  });
});