$(document).ready(function(){
    $('.carousel').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        infinite: true,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        cssEase: 'linear',
        speed: 3000,
        pauseOnFocus: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 6
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3
                }
            }
        ]
    });

    $('.carousel-item').on('click', function() {
        var $item = $(this);
        var $img = $item.find('img');
        var $nickname = $item.find('.nickname');
        var posX = $img.offset().left + $img.width() / 2;
        var posY = $img.offset().top + $img.height() / 2;

        confetti({
            particleCount: 100,
            spread: 60,
            origin: {
                x: posX / window.innerWidth,
                y: (posY - window.scrollY) / window.innerHeight
            }
        });

        $img.css('visibility', 'hidden');
        $nickname.css('visibility', 'hidden');

        setTimeout(function() {
            $img.css('visibility', 'visible');
            $nickname.css('visibility', 'visible');
        }, 2500);
    });
});