(function($G){

    $G(document).on('ready', function(){

        setTimeout(function(){
            document.body.classList += ' doc-loaded'
        }, 500)

        $G('#submit').click(function(event){
            //$G("#div_element").load('');

            data = { action: 'get_more_notable_past_events' };
            
            jQuery.post(my_ajax_object.ajax_url, data, function(response){
                $G("#div_element").append(response);
            });
        });





        

        $G('.mobile-menu-activate').on('click', function() {
            $G('.mobile-menu').toggleClass('open');
            $G('.top').toggleClass('opened');
            $G('body').toggleClass('no-scroll');
        });

  

        const player = document.querySelectorAll('lottie-player');

        var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});
        
        for (let index = 0; index < $G('.gbc_fade--in').length; index++) {

            setTimeout(function(){

                
                new ScrollMagic.Scene({
                    offset: ($G('.gbc_fade--in').eq(index).offset().top) - ($G(window).height() / 2),
                    duration: 200,
                }).on('update', e => {
                    if (e.target.progress() > 0.01) {
                        $G('.gbc_fade--in').eq(index).addClass('play');
                        setTimeout(function(){
                            if (player[index]) {
                                player[index].play();
                            }
                        }, 1000)
                        
                    }
                }).on('load', e => {
                    if (e.target.progress() > 0.01) {
                        $G('.gbc_fade--in').eq(index).addClass('play');
                        setTimeout(function(){
                            if (player[index]) {
                                player[index].play();
                            }
                        }, 1000)
                        
                    }
                })

                .addTo(controller)

            }, 200)

                
        }
        if ($G('body').hasClass('home')){
            new ScrollMagic.Scene({triggerElement: ".why-lester-brunt", offset: $G(window).height() / 2})
            .setTween(".why-lester-brunt #parallax1", {y: "50%"})
            .addTo(controller);

            new ScrollMagic.Scene({triggerElement: ".getting-advice", offset: $G(window).height() / 2})
            .setTween(".getting-advice #parallax2", {y: "50%"})
            .addTo(controller);

            new ScrollMagic.Scene({triggerElement: ".people-that-matter", offset: $G(window).height() / 2})
            .setTween(".people-that-matter #parallax3", {y: "50%"})
            .addTo(controller);

            new ScrollMagic.Scene({triggerElement: ".meet-your-adviser", offset: $G(window).height() / 2})
            .setTween(".meet-your-adviser #parallax4", {y: "50%"})
            .addTo(controller);
        }




        if ($G('.svc').length !== 0) {

            new ScrollMagic.Scene({triggerElement: ".svc", offset: $G(window).height()})
            .setTween(".svc #parallax", {y: "-12%"})
            .addTo(controller);

        }

    });

    console.log('ready')

})(jQuery);

jQuery(document).ready(function(){
    jQuery('.example-carousel').slick({
        slidesToShow: 5,
        arrows: true,
         nextArrow: '<i class="fas fa-chevron-circle-right"></i>',
       prevArrow : '<i class="fas fa-chevron-circle-left"></i>',
        //dots: true,
        centerMode: false,
        centerPadding: '40px',
        touchThreshold:100,
        swipeToSlide: true,
        infinite: true
    });
    jQuery('.logo-carousel').slick({
        slidesToShow: 3,
        arrows: true,
         nextArrow: '<i class="fas fa-chevron-circle-right"></i>',
       prevArrow : '<i class="fas fa-chevron-circle-left"></i>',
       centerMode: false,
       autoplay: true,
       autoplaySpeed: 6000,
       touchThreshold:100,
       swipeToSlide: true,
       responsive: [
        {
            breakpoint: 2180,
            settings: {
            slidesToShow: 2,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
            }
          },
       ]
    });
    jQuery('.logo-carousel-team-member').slick({
        slidesToShow: 5,
        arrows: true,
        nextArrow: '<i class="fas fa-chevron-circle-right"></i>',
        prevArrow : '<i class="fas fa-chevron-circle-left"></i>',
        centerMode: false,
        autoplay: true,
        autoplaySpeed: 6000,
        touchThreshold:100,
        swipeToSlide: true,
        responsive: [
            {
                breakpoint: 2180,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                }
            },
        ]
    });
    jQuery('.text-rotate.active').fadeIn()

    var GBCwindowFocused = true;

        
    var textRotate = function(){
        let elIndex = jQuery('.text-rotate.active').index() + 1;
        if (GBCwindowFocused) {
        jQuery('.text-rotate').removeClass('active').fadeOut(500)
        setTimeout(function(){
            jQuery('.text-rotate').eq(elIndex).addClass('active').fadeIn(500)
        }, 500)

        if (elIndex == jQuery('.text-rotate').length) {

            jQuery('.text-rotate').removeClass('active').fadeOut(500)
            setTimeout(function(){
                jQuery('.text-rotate').eq(0).addClass('active').fadeIn(500).stop(true,true);
            }, 500)
            

        }
    }
      }

      setTimeout(function(){
        setInterval(textRotate, 3000)
      }, 1000)



    jQuery(window).blur(function(e) {
        // Do Blur Actions Here
        GBCwindowFocused = false;
        clearInterval(textRotate); // stop the interval
    });
    jQuery(window).focus(function(e) {
        // Do Focus Actions Here
        GBCwindowFocused = true;
        textRotate = setInterval(textRotate, 3000)
    });


    jQuery('button.discover-more > span.active').fadeIn();

    jQuery('button.discover-more.button-orange').on('click', function() {
        var pare = jQuery(this).closest('section')
        var accord = jQuery(pare).nextAll('.accordion:first')
        
        if (jQuery(this).find('.discover-more--main').hasClass('active')) {
            jQuery(this).find('.discover-more--main').removeClass('active').fadeOut(500)
            jQuery(window).scrollTop(jQuery(this).offset().top - (jQuery('header').height() + jQuery(this).innerHeight()))
            setTimeout(() => {
                jQuery(this).find('.discover-more--close').addClass('active').fadeIn(500)
            }, 500);
        } else {
            jQuery(this).find('.discover-more--close').removeClass('active').fadeOut(500)
            setTimeout(() => {

                jQuery(this).find('.discover-more--main').addClass('active').fadeIn(500)
            }, 500);

        }



        jQuery(accord).toggleClass('open')
    })

    jQuery(document).bind('click', function(e) {
        if( (!jQuery(e.target).is('header') && !jQuery(e.target).is('.mobile-menu')) && jQuery('.mobile-menu').hasClass('open') && jQuery(e.target).closest('header').length === 0 && jQuery(e.target).closest('.mobile-menu').length === 0) {
          // do something
          console.log(jQuery(e.target).is('header'))
          jQuery('.mobile-menu').removeClass('open');
          jQuery('.top').removeClass('opened');
          jQuery('body').removeClass('no-scroll');
        }
      });

})

jQuery(document).on('load scroll ready', function(){
    if (jQuery(document).scrollTop() >= 10) {
        jQuery('header').addClass('stick')
    } else {
        jQuery('header').removeClass('stick')
    }
})

