$(document).ready(function(){
    $('.owl-carousel.tab-box').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            767:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
    $('.owl-carousel.img-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.owl-carousel.modal-hotel-img').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    $(".tab-button").click(function() {
        let tabId = $(this).attr("data-tab");

        $('.tab-button').each(function( ) {
            if($(this).hasClass('active-btn')){
                $(this).removeClass('active-btn')
            }
        });
        if($(this).hasClass('active-btn')){
            $(this).removeClass('active-btn')
        } else {
            $(this).addClass('active-btn')
        }

        $(".tab").removeClass("active-tab");

        $("#" + tabId).addClass("active-tab");
    });

})