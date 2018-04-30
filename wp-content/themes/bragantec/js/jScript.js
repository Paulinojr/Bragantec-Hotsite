
$(document).ready(function () {
    var fonte = 10;

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


    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      direction: 'vertical',
      loop: true
    })
});
