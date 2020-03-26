$('.item-cima.single-item').click(event => {
    const idPeca = $('.slick-current.imagem-cima').attr('id');
    window.location.href = '/projeto-espacoD/carousel.php?idPeca='+idPeca+'&pos=cima';
});