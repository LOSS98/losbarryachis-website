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
      pauseOnFocus: false
    });

    // sur téléphone
    if ($(window).width() < 768) {
      $('.carousel').slick('slickSetOption', 'slidesToShow', 3, true);
    }

    $('.carousel img').on('click', function() {
        var $img = $(this);
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

        $img.fadeOut(300, function() {
          // comeback after 2s
          setTimeout(function() {
            $img.fadeIn(300);
          }, 2500);
        });
    });
  });