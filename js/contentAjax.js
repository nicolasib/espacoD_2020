

setTimeout(() => {
    /* IMPRIMINDO DESCRIÇÕES */
    /* Imprimir dados parte de cima */
    let idCima = $('.slick-active.imagem-cima').attr('id');
    $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'}, ()=>{
        $('.colorFilterShow').load('./php/getColors.php', {idCima: idCima}, () => {
            $('.cores').click(function(){
                let path = $(this).attr('imgpath');
                $('.slick-active.imagem-cima').children("img").each(function(){
                    $(this).attr('src', './imgs/cima/'+path+'.jpg');
                })
            }) 
        });
    });
    
    $('.confirm-modal-tam-cima').on('click', event => {
        let idCima = $('.imagem-cima.slick-active').attr('id');
        if(idCima){
            $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
        }
    })

    $('.confirm-modal-categorias-cima').on('click', event => {
        let idCima = $('.imagem-cima.slick-active').attr('id');
        if(idCima){
            $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
        }
    })

    $('.confirm-modal-marca-cima').on('click', event => {
        let idCima = $('.imagem-cima.slick-active').attr('id');
        if(idCima){
            $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'});
        }
    })

    $('.confirm-modal-tam-baixo').on('click', event => {
        let idBaixo = $('.imagem-baixo.slick-active').attr('id');
        if(idBaixo){
            $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
        }
    })

    $('.confirm-modal-marca-baixo').on('click', event => {
        let idBaixo = $('.imagem-baixo.slick-active').attr('id');
        if(idBaixo){
            $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
        }
    })

    $('.confirm-modal-categorias-baixo').on('click', event => {
        let idBaixo = $('.imagem-baixo.slick-active').attr('id');
        if(idBaixo){
            $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
        }
    })
    
    $('.item-cima').on('afterChange',function(){
        let idCima = $('.slick-active.imagem-cima').attr('id');
        $('.contentholder-cima').load('./php/load-content.php', {idCima: idCima, method: 'loadContentCima'}, ()=>{
            $('.colorFilterShow').load('./php/getColors.php', {idCima: idCima}, () => {
                $('.cores').click(function(){
                    let path = $(this).attr('imgpath');
                    $('.slick-active.imagem-cima').children("img").each(function(){
                        $(this).attr('src', './imgs/cima/'+path+'.jpg');
                    })
                }) 
            });
        });
    });

     /* Imprimir dados parte de baixo */
     $('.item-baixo').on('init',function(next){
        let idBaixo = $('.imagem-baixo.slick-active').attr('id');
        $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
     });
    
     $('.item-baixo').on('afterChange',function(){
         let idBaixo = $('.imagem-baixo.slick-active').attr('id');
         $('.contentholder-baixo').load('./php/load-content.php', {idBaixo: idBaixo, method: 'loadContentBaixo'});
    });
    
}, 250);