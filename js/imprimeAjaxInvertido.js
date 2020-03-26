function CarregaContent(){
    $('.item-cima.single-item').slick('unslick');
    let idBaixo = $('.slick-active.imagem-baixo').attr('id');
    $('.single-item.item-cima').load('./php/limitante-cima.php', {id: idBaixo}, function(){
        $('.item-cima.single-item').slick({
            prevArrow: $('.prev-cima'),
            nextArrow: $('.next-cima'),
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

$('.item-baixo').on('afterChange', function(){
    CarregaContent();
});
