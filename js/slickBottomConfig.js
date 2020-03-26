
$(document).delay(100).queue(function(next){
    $('.item-baixo.single-item').slick({
        prevArrow: $('.prev-baixo'),
        nextArrow: $('.next-baixo'),
        draggable: false,
        swipe: false,
        lazyLoad: 'ondemand'
    });
});
