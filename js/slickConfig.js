$(document).ready(function(){
    $('.item-cima.single-item').slick({
        prevArrow: $('.prev-cima'),
        nextArrow: $('.next-cima'),
        draggable: false,
        swipe: false
    });

    setTimeout(() => {
        let idBaixo = $('.slick-active.imagem-baixo').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    }, 500)


    // /* Filtros cima */
    // $('.filtro-camisa').click(()=>{
    //     $('.item-cima').slick('slickUnfilter');
    //     $('.item-cima').slick('slickFilter', '.camisa');
    //     var idCima = $('.slick-active.imagem-cima').attr('id');
    //     $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    // });
    // $('.filtro-cropped').click(()=>{
    //     $('.item-cima').slick('slickUnfilter');
    //     $('.item-cima').slick('slickFilter', '.cropped');
    //     var idCima = $('.slick-active.imagem-cima').attr('id');
    //     $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    // });
    // $('.filtro-top').click(()=>{
    //     $('.item-cima').slick('slickUnfilter');
    //     $('.item-cima').slick('slickFilter', '.top');
    //     var idCima = $('.slick-active.imagem-cima').attr('id');
    //     $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    // });
    // $('.filtro-moletom').click(()=>{
    //     $('.item-cima').slick('slickUnfilter');
    //     $('.item-cima').slick('slickFilter', '.moletom');
    //     var idCima = $('.slick-active.imagem-cima').attr('id');
    //     $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    // });
    // /* Retirando filtro - cima */
    // $('.unfilter-cima').click(()=>{
    //     $('.item-cima').slick('slickUnfilter');
    //     var idCima = $('.slick-active.imagem-cima').attr('id');
    //     $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
    // });



    // /* Filtros baixo*/
    // $('.filtro-calca').click(()=>{
    //     $('.item-baixo').slick('slickUnfilter');
    //     $('.item-baixo').slick('slickFilter', '.calca');
    //     var idBaixo = $('.slick-active.imagem-baixo').attr('id');
    //     $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    // });
    // $('.filtro-bermuda').click(()=>{
    //     $('.item-baixo').slick('slickUnfilter');
    //     $('.item-baixo').slick('slickFilter', '.bermuda');
    //     var idBaixo = $('.slick-active.imagem-baixo').attr('id');
    //     $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    // });
    // $('.filtro-short').click(()=>{
    //     $('.item-baixo').slick('slickUnfilter');
    //     $('.item-baixo').slick('slickFilter', '.short');
    //     var idBaixo = $('.slick-active.imagem-baixo').attr('id');
    //     $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    // });
    // $('.filtro-saia').click(()=>{
    //     $('.item-baixo').slick('slickUnfilter');
    //     $('.item-baixo').slick('slickFilter', '.saia');
    //     var idBaixo = $('.slick-active.imagem-baixo').attr('id');
    //     $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    // });

    // /* Retirando filtro - baixo */
    // $('.unfilter-baixo').click(()=>{
    //     $('.item-baixo').slick('slickUnfilter');
    //     var idBaixo = $('.slick-active.imagem-baixo').attr('id');
    //     $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    // });
    
    
});