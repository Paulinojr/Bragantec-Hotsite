
$(document).ready(function () {
    var fonte = 10;
    var img;
    $('#arrowUpR').css({display: 'none'});
    $('#arrowUpV').css({display: 'none'});

    /***********Aumentar e diminuir letra**************/
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
                if ($(this).scrollTop() > 235) {
                    nav.addClass("menuFixo");
                } else {
                    nav.removeClass("menuFixo");
                }
            }
        });
    });

    /**************************************************/
    /*link interno no menu, scroll leve*/
    $('.primeira a[href^="#"]').on('click', function(e) {
        // prevenir que o link funcione da forma padrão que no caso seria "pulando" para o elemento com o id
        e.preventDefault();
        //variável id com o valor refentente ao link clicado
        var id = $(this).attr('href'), targetOffset = $(id).offset().top;
        $('html, body').animate({
            scrollTop: targetOffset - 200
        }, 500);
    });
    
    /*RESUMO DIV*/
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
    
    /* Carrossel */
    var swiper = new Swiper('.swiper-container', {
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
});
