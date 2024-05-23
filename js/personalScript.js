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