// Document ready
$(document).ready(function() {
    // Au défilement, le header prend une box-shadow
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('header').addClass('header-scroll');
        } else {
            $('header').removeClass('header-scroll');
        }
    });
});