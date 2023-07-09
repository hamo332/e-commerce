$(document).ready(function(){

    // Scroll To Top ...
    $('.scrollTop').click(function(){
        $('html,body').animate({
            scrollTop : 0
        },500);
    });


    // When Scroll page ..
    $(window).scroll(function(e){

        if( $(window).scrollTop() >= 600 ){
            $('.scrollTop').show();
        }else{
            $('.scrollTop').hide();
        }
        
    });

    // Scroll Down ..
    $('.scrollDown').click(function(){
        $('body,html').animate({
            scrollTop : $('.statistics').offset().top - 120
        })
    });

    // Start Owl Carousel ...
    $(".testimonials .owl-carousel").owlCarousel({
        items : 3,
        margin : 20,
        loop:false,
        mouseDrag : true,
        touchDrag: true,
        rtl : true,
        nav : true,
        dots : false,
        autoplay : true,
        autoplayTimeout : 3000,
    });
    

});