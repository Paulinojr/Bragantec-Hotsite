
$(document).ready(function () {
    var fonte = 10;
    var img;

    /***********Aumentar e diminuir letra**************/
    $("html").css({fontSize: 10});

    $("#aF").click(function () {
        if (fonte < 17) {
            fonte = fonte + 1;
            $('html').css({fontSize: fonte + 'px'});
        }
    });

    $("#dF").click(function () {
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
            if ($(this).scrollTop() > 235) { 
                nav.addClass("menuFixo");
            } else { 
                nav.removeClass("menuFixo"); 
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
            scrollTop: targetOffset - 100
        }, 500);
    });

});
