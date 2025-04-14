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
    

    $('.charm').each(function() {
        var charm = $(this);
        var distance = 30;
        // Duration aléatoire
        var duration = Math.floor((Math.random() * 10000) + 500);
        animateCharm(charm, distance, duration);
    });

    function animateCharm(selector, distance, duration) {
        var duration = Math.floor(Math.random() * 2000) + 1000;
        var randomLeft = Math.floor(Math.random() * distance);
        var randomTop = Math.floor(Math.random() * distance);

        selector.animate({ left: `+=${randomLeft}px`, top: `+=${randomTop}px` }, duration, function() {
            selector.animate({ left: `-=${randomLeft}px`, top: `-=${randomTop}px` }, duration, function() {
                animateCharm(selector, distance, duration);
            });
        });
    }

    // Version téléphone
    if ($(window).width() < 768) {
        $('#btn-taxi').html('<ion-icon name="car-sport"></ion-icon>').css({"padding":".9rem 1.1rem"});
        $('#btn-taxi ion-icon').css({"margin-left":"0rem"});
    }
});