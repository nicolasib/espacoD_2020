$(document).ready(function(){
    $('.item-baixo.single-item').slick({
        prevArrow: $('.prev-baixo'),
        nextArrow: $('.next-baixo'),
        draggable: false,
        swipe: false
    });
    
    let idBaixo = $('.slick-active.imagem-baixo').attr('id');
    $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    
})