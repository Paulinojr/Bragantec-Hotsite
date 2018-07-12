
$(document).ready(function () {
    var fonte = 10;
    var img;
    $(".fancy").fancybox();
    $("[id*='arrowUp']").css({display: 'none'});

    $("#desDiv").fadeOut();
    $("#apreDiv").fadeOut();

    /***********Aumentar e diminuir letra*************a*/
    $("html").css({fontSize: 10});

    $("#aF, #aFM").click(function () {
        if (fonte < 16) {
            fonte = fonte + 1;
            $('html').css({fontSize: fonte + 'px'});
        }
    });

    $("#dF, #dFM").click(function () {
        if (fonte > 8) {
            fonte = fonte - 1;
            $('html').css({fontSize: fonte + 'px'});
        }
    });

    /**************************************************/
    /*Menu fixo apartir da imagem*/
    $(function(){
        var nav = $('#menu');
        $(window).scroll(function () {
            if ($(window).width() < 1024) {
                if ($(this).scrollTop() > 81) {
                    nav.addClass("menuFixo");
                } else {
                    nav.removeClass("menuFixo");
                }
            }else{
                if ($(this).scrollTop() > 475) {
                    nav.addClass("menuFixo");
                } else {
                    nav.removeClass("menuFixo");
                }
            }
        });
    });

    /**************************************************/
    /*link interno no menu, scroll leve*/
    $('.primeira a[href^="#"], #bannerInicial a[href^="#"]').on('click', function(e) {
        // prevenir que o link funcione da forma padrão que no caso seria "pulando" para o elemento com o id
        e.preventDefault();
        //variável id com o valor refentente ao link clicado
        var id = $(this).attr('href'), targetOffset = $(id).offset().top;
        $('html, body').animate({
            scrollTop: targetOffset - 200
        }, 500);
    });

    /*DROPDOWN DIVS*/
    $("#resumoDiv, #seta").click(function(){
        if($("#infosResumo").is(':visible')){
            $("#infosResumo").fadeOut();
            $('#arrowUpR').css({display: 'none'});
            $('#arrowDownR').css({display: 'block'});
        }else{
           $("#infosResumo").fadeIn();
            $('#arrowDownR').css({display: 'none'});
            $('#arrowUpR').css({display: 'block'});
       }
   });

    $("#videoDiv, #otaseta").click(function(){
        if($("#infosVideo").is(':visible')){
            $("#infosVideo").fadeOut();
            $('#arrowUpV').css({display: 'none'});
            $('#arrowDownV').css({display: 'block'});
        }else{
            $("#infosVideo").fadeIn();
            $('#arrowDownV').css({display: 'none'});
            $('#arrowUpV').css({display: 'block'});
       }
   });
    $("#planoDiv, #otaseta3").click(function(){
        if($("#infosPlano").is(':visible')){
            $("#infosPlano").fadeOut();
            $('#arrowUpP').css({display: 'none'});
            $('#arrowDownP').css({display: 'block'});
        }else{
           $("#infosPlano").fadeIn();
            $('#arrowDownP').css({display: 'none'});
            $('#arrowUpP').css({display: 'block'});
       }
    });
    $("#cadDiv, #otaseta4").click(function(){
        if($("#infosCad").is(':visible')){
            $("#infosCad").fadeOut();
            $('#arrowUpC').css({display: 'none'});
            $('#arrowDownC').css({display: 'block'});
        }else{
           $("#infosCad").fadeIn();
            $('#arrowDownC').css({display: 'none'});
            $('#arrowUpC').css({display: 'block'});
       }
    });
    $("#diarioDiv, #seta5").click(function(){
        if($("#infosDiario").is(':visible')){
            $("#infosDiario").fadeOut();
            $('#arrowUpD').css({display: 'none'});
            $('#arrowDownD').css({display: 'block'});
        }else{
           $("#infosDiario").fadeIn();
            $('#arrowDownD').css({display: 'none'});
            $('#arrowUpD').css({display: 'block'});
       }
    });

    //step by step intro desenvolvimento e apresentaçao
    var header = document.getElementById("stepbstep");
    var li = header.getElementsByClassName("liStep");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    };
    $("#stepbstep li").click(function(){
      if ($("#intro").hasClass("active")) {
        $("#introDiv").fadeIn();
        $("#desDiv").fadeOut();
        $("#apreDiv").fadeOut();
      }
      if ($("#des").hasClass("active")) {
        $("#desDiv").fadeIn();
        $("#introDiv").fadeOut();
        $("#apreDiv").fadeOut();
      }
      if ($("#apre").hasClass("active")) {
        $("#apreDiv").fadeIn();
        $("#introDiv").fadeOut();
        $("#desDiv").fadeOut();
      }
    });

    /* Carrossel */
    var swiper = new Swiper('.sliderDesktop', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    var swiper = new Swiper('.sliderMobile', {
        slidesPerView: 'auto',
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
});
