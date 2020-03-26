function CarregaContent(){
    $('.item-baixo.single-item').slick('unslick');
    let idCim = $('.slick-active.imagem-cima').attr('id');
    $('.single-item.item-baixo').load('./php/limitante-baixo.php', {id: idCim}, function(){
        $('.item-baixo.single-item').slick({
            prevArrow: $('.prev-baixo'),
            nextArrow: $('.next-baixo'),
            draggable: false,
            swipe: false,
            lazyLoad: 'ondemand'
        });
    });
}

$(document).ready(function(){
    /* IMPRIMINDO IMAGENS BAIXO */
    setTimeout(CarregaContent, 100);
});

$('.item-cima').on('afterChange', function(){
    CarregaContent();
});
