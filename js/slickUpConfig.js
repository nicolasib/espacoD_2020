
$(document).delay(100).queue(function(next){
    $('.item-cima.single-item').slick({
        prevArrow: $('.prev-cima'),
        nextArrow: $('.next-cima'),
        draggable: false,
        swipe: false,
        lazyLoad: 'ondemand'
    });
});
