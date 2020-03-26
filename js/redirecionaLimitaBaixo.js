$('.item-baixo.single-item').click(event => {
    const idPeca = $('.slick-current.imagem-baixo').attr('id');
    window.location.href = '/projeto-espacoD/carouselInvertido.php?idPeca='+idPeca+'&pos=baixo';
});