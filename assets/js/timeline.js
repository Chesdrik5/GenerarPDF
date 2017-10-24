$(document).ready(function() {

    $('#imagenFlotante').click(function() {
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('#imagenFlotante').slideDown(300);
        } else {
            $('#imagenFlotante').slideUp(300);
        }
    });

});
