
$(document).ready(function () {
    var fonte = 10;
    var img;

    /***********Aumentar e diminuir letra**************/
    $("html").css({
        fontSize: 10
    });

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

});
