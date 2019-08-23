//connect slider partners
jQuery(window).on('load', function () {

    jQuery('.sliderClients').slick({
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 5,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        arrows: false,
        infinite: true,
        speed: 300,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    jQuery('.buttonPopupMail').on('click', function(){
        jQuery('#contact_form_pop').css({
            opacity: 1,
            position: 'fixed',
            left:0
        })
    });
    jQuery('.closePopup').on('click', function(){
        jQuery('#contact_form_pop').css({
            opacity: 0,
            position: 'absolute',
            left: '-3000px'
        })
    });


});