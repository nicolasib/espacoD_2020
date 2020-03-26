<?php
    header('Content-Type: text/html; charset=UTF-8');
    include './php/functions.php';

    if(isset($_GET['pos']) && isset($_GET['idPeca'])){
        $pos = $_GET['pos'];
        $idPeca = $_GET['idPeca'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carousel</title>
    <link rel="shortcut icon" href="./imgs/icones/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Main.css -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Categorias -->
    <div class="categorias-modal-cima hidden">
        <div class="card-modal">
            <h1>Categorias</h1>
            <form>
                <label><input type="radio" name="filter-cima" value="Tudo" checked>Tudo</label>
                <label><input type="radio" name="filter-cima" value="Blusa">Blusas</label>
                <label><input type="radio" name="filter-cima" value="Camisa">Camisas</label>
                <label><input type="radio" name="filter-cima" value="Camiseta">Camisetas</label>
                <label><input type="radio" name="filter-cima" value="Casaco">Casacos</label>
            </form>
            <div class="confirm-modal-categorias-cima">Filtrar</div>
            <div class="cancel-modal-categorias-cima">Cancelar</div>
        </div>
    </div>
    <div class="categorias-modal-baixo hidden">
        <div class="card-modal">
            <h1>Categorias</h1>
            <form>
                <label><input type="radio" name="filter-baixo" value="Tudo" checked>Tudo</label>
                <label><input type="radio" name="filter-baixo" value="Saia">Saias</label>
                <label><input type="radio" name="filter-baixo" value="Short">Shorts</label>
                <label><input type="radio" name="filter-baixo" value="Calça">Calças</label>
            </form>
            <div class="confirm-modal-categorias-baixo">Filtrar</div>
            <div class="cancel-modal-categorias-baixo">Cancelar</div>
        </div>
    </div>
    <!-- Tamanhos -->
    <div class="tamanho-modal-cima hidden">
        <div class="card-modal">
            <h1>Tamanhos</h1>
            <form>
                <label><input type="radio" name="filter-tam-cima" value="Tudo" checked>Tudo</label>
                <label><input type="radio" name="filter-tam-cima" value="tamanhoPP">PP</label>
                <label><input type="radio" name="filter-tam-cima" value="tamanhoP">P</label>
                <label><input type="radio" name="filter-tam-cima" value="tamanhoM">M</label>
                <label><input type="radio" name="filter-tam-cima" value="tamanhoG">G</label>
                <label><input type="radio" name="filter-tam-cima" value="tamanhoGG">GG</label>
            </form>
            <div class="confirm-modal-tam-cima">Filtrar</div>
            <div class="cancel-modal-tam-cima">Cancelar</div>
        </div>
    </div>
    <div class="tamanho-modal-baixo hidden">
        <div class="card-modal">
            <h1>Tamanhos</h1>
            <form>
                <label><input type="radio" name="filter-tam-baixo" value="Tudo" checked>Tudo</label>
                <label><input type="radio" name="filter-tam-baixo" value="tamanhoPP">PP</label>
                <label><input type="radio" name="filter-tam-baixo" value="tamanhoP">P</label>
                <label><input type="radio" name="filter-tam-baixo" value="tamanhoM">M</label>
                <label><input type="radio" name="filter-tam-baixo" value="tamanhoG">G</label>
                <label><input type="radio" name="filter-tam-baixo" value="tamanhoGG">GG</label>
            </form>
            <div class="confirm-modal-tam-baixo">Filtrar</div>
            <div class="cancel-modal-tam-baixo">Cancelar</div>
        </div>
    </div>
    <!-- Marcas -->
    <div class="marca-modal-cima hidden">
        <div class="card-modal">
            <h1>Marcas</h1>
            <form>
                <label><input type="radio" name="filter-marca-cima" value="Tudo" checked>Tudo</label>
                <label><input type="radio" name="filter-marca-cima" value="Mandoras">Mandoras</label>
                <label><input type="radio" name="filter-marca-cima" value="Amaro">Amaro</label>
                <label><input type="radio" name="filter-marca-cima" value="Renner">Renner</label>
                <label><input type="radio" name="filter-marca-cima" value="C&A">C&A</label>
                <label><input type="radio" name="filter-marca-cima" value="Enjoei">Enjoei</label>
                <label><input type="radio" name="filter-marca-cima" value="Posthaus">Posthaus</label>
                <label><input type="radio" name="filter-marca-cima" value="Marisa">Marisa</label>
                <label><input type="radio" name="filter-marca-cima" value="Zattini">Zattini</label>
                <label><input type="radio" name="filter-marca-cima" value="CódigoGiirls">Código Giirls</label>
                <label><input type="radio" name="filter-marca-cima" value="Kanui">Kanui</label>
                <label><input type="radio" name="filter-marca-cima" value="Dafiti">Dafiti</label>
            </form>
            <div class="confirm-modal-marca-cima">Filtrar</div>
            <div class="cancel-modal-marca-cima">Cancelar</div>
        </div>
    </div>
    <div class="marca-modal-baixo hidden">
        <div class="card-modal">
            <h1>Marcas</h1>
            <form>
            <label><input type="radio" name="filter-marca-baixo" value="Tudo" checked>Tudo</label>
                <label><input type="radio" name="filter-marca-baixo" value="Mandoras">Mandoras</label>
                <label><input type="radio" name="filter-marca-baixo" value="Amaro">Amaro</label>
                <label><input type="radio" name="filter-marca-baixo" value="Renner">Renner</label>
                <label><input type="radio" name="filter-marca-baixo" value="C&A">C&A</label>
                <label><input type="radio" name="filter-marca-baixo" value="Enjoei">Enjoei</label>
                <label><input type="radio" name="filter-marca-baixo" value="Posthaus">Posthaus</label>
                <label><input type="radio" name="filter-marca-baixo" value="Marisa">Marisa</label>
                <label><input type="radio" name="filter-marca-baixo" value="Zattini">Zattini</label>
                <label><input type="radio" name="filter-marca-baixo" value="CódigoGiirls">Código Giirls</label>
                <label><input type="radio" name="filter-marca-baixo" value="Kanui">Kanui</label>
                <label><input type="radio" name="filter-marca-baixo" value="Dafiti">Dafiti</label>
            </form>
            <div class="confirm-modal-marca-baixo">Filtrar</div>
            <div class="cancel-modal-marca-baixo">Cancelar</div>
        </div>
    </div>
    <main>
        <div>
            <section class="conteudo">
                <div class="dados">
                    <div class="image-content">
                        <div class="filter-cima">Filtrar</div>
                        <div class="dropdown-filter-cima hidden">
                            <div class="arrow"></div>
                            <ul>
                                <li class="item categorias-cima">Categorias</li>
                                <li class="item tamanho-cima">Tamanhos</li>
                                <li class="item marca-cima">Marcas</li>
                            </ul>
                        </div>
                        <div class="imageholder">
                            <button class="prev-cima"><</button>
                            <button class="next-cima">></button>
                            <div class="single-item item-cima">
                                <?php 
                                    imprimirImg(null, null);
                                ?>
                            </div>

                        </div>
                        
                    </div>
                    <div class="contentholder-cima">

                    </div>
                </div>
            </section>
            <section class="conteudo">
                <div class="dados">
                    <div class="image-content">
                        <div class="filter-baixo">Filtrar</div>
                        <div class="dropdown-filter-baixo hidden">
                            <div class="arrow"></div>
                            <ul>
                                <li class="item categorias-baixo">Categorias</li>
                                <li class="item tamanho-baixo">Tamanhos</li>
                                <li class="item marca-baixo">Marcas</li>
                            </ul>
                        </div>
                        <div class="imageholder">
                            <button class="prev-baixo"><</button>
                            <button class="next-baixo">></button>
                            <div class="single-item item-baixo">
                                <?php
                                    imprimirImgBaixo();
                                ?>
                            </div>
                        </div>
                        
                    </div>
                    <div class="contentholder-baixo">

                    </div>
                </div>
            </section>
        </div>

        <div class="looksProntos">Looks prontos</div>

    </main>
    <!-- Jquery 3.x -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- Slick js -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- personal js -->
    <script type="text/javascript" src="js/slickConfig.js"></script>
    <script src="js/slickBottomConfig.js"></script>
    <script type="text/javascript" src="js/contentAjax.js"></script>
    <script>
        var filtered = false;

        $('.filter-cima').mouseenter(event => {
            $('.dropdown-filter-cima').removeClass('hidden');
        });

        $('.dropdown-filter-cima').mouseover(event => {
            $('.dropdown-filter-cima').removeClass('hidden');
        })

        $('.dropdown-filter-cima').mouseleave(event => {
            $('.dropdown-filter-cima').addClass('hidden');
        })

        $('.filter-cima').mouseleave(event => {
            $('.dropdown-filter-cima').addClass('hidden');
        })

        $('.confirm-modal-categorias-cima').on('click', event => {
            $('.categorias-modal-cima').addClass('hidden')
            
            $('.item-baixo').slick('slickUnfilter');

            var classefiltrada = '.' + $("input[name='filter-cima']:checked").val();

            if(classefiltrada !== '.Tudo'){
                $('.item-cima').slick('slickFilter', classefiltrada);
                filtered = true;
            }else if(filtered === true){
                $('.item-cima').slick('slickUnfilter');
                filtered = false;
            }
        })

        $('.cancel-modal-categorias-cima').on('click', event => {
            $('.categorias-modal-cima').addClass('hidden')
        })

        $('.categorias-cima').on('click', event => {
            $('.categorias-modal-cima').removeClass('hidden')
        })



        $('.filter-baixo').mouseenter(event => {
            $('.dropdown-filter-baixo').removeClass('hidden');
        });

        $('.dropdown-filter-baixo').mouseover(event => {
            $('.dropdown-filter-baixo').removeClass('hidden');
        })

        $('.dropdown-filter-baixo').mouseleave(event => {
            $('.dropdown-filter-baixo').addClass('hidden');
        })

        $('.filter-baixo').mouseleave(event => {
            $('.dropdown-filter-baixo').addClass('hidden');
        })

        $('.confirm-modal-categorias-baixo').on('click', event => {
            $('.categorias-modal-baixo').addClass('hidden');
            
            $('.item-baixo').slick('slickUnfilter');
            
            var classefiltrada = '.' + $("input[name='filter-baixo']:checked").val();

            

            if(classefiltrada !== '.Tudo'){
                $('.item-baixo').slick('slickFilter', classefiltrada);
                filtered = true;
            }else if(filtered === true){
                $('.item-baixo').slick('slickUnfilter');
                filtered = false;
            }
        })

        $('.cancel-modal-categorias-baixo').on('click', event => {
            $('.categorias-modal-baixo').addClass('hidden')
        })

        $('.categorias-baixo').on('click', event => {
            $('.categorias-modal-baixo').removeClass('hidden')
        })


        $('.tamanho-cima').on('click', event => {
            $('.tamanho-modal-cima').removeClass('hidden')
        })

        $('.confirm-modal-tam-cima').on('click', event => {
            $('.tamanho-modal-cima').addClass('hidden');
            
            $('.item-cima').slick('slickUnfilter');
            
            var classefiltrada = '.' + $("input[name='filter-tam-cima']:checked").val();

            

            if(classefiltrada !== '.Tudo'){
                $('.item-cima').slick('slickFilter', classefiltrada);
                filtered = true;
            }else if(filtered === true){
                $('.item-cima').slick('slickUnfilter');
                filtered = false;
            }
        })

        $('.cancel-modal-tam-cima').on('click', event => {
            $('.tamanho-modal-cima').addClass('hidden');
        })


        $('.tamanho-baixo').on('click', event => {
            $('.tamanho-modal-baixo').removeClass('hidden')
        })

        $('.confirm-modal-tam-baixo').on('click', event => {
            $('.tamanho-modal-baixo').addClass('hidden');
            
            $('.item-baixo').slick('slickUnfilter');
            
            var classefiltrada = '.' + $("input[name='filter-tam-baixo']:checked").val();            

            if(classefiltrada !== '.Tudo'){
                $('.item-baixo').slick('slickFilter', classefiltrada);
                filtered = true;
            }else if(filtered === true){
                $('.item-baixo').slick('slickUnfilter');
                filtered = false;
            }
        })

        $('.cancel-modal-tam-baixo').on('click', event => {
            $('.tamanho-modal-baixo').addClass('hidden');
        })



        $('.marca-cima').on('click', event => {
            $('.marca-modal-cima').removeClass('hidden')
        })

        $('.confirm-modal-marca-cima').on('click', event => {
            $('.marca-modal-cima').addClass('hidden');
            
            $('.item-cima').slick('slickUnfilter');
            
            var classefiltrada = '.' + $("input[name='filter-marca-cima']:checked").val();            

            if(classefiltrada !== '.Tudo'){
                $('.item-cima').slick('slickFilter', classefiltrada);
                filtered = true;
            }else if(filtered === true){
                $('.item-cima').slick('slickUnfilter');
                filtered = false;
            }
        })

        $('.cancel-modal-marca-cima').on('click', event => {
            $('.marca-modal-cima').addClass('hidden');
        })

        
        $('.marca-baixo').on('click', event => {
            $('.marca-modal-baixo').removeClass('hidden')
        })

        $('.confirm-modal-marca-baixo').on('click', event => {
            $('.marca-modal-baixo').addClass('hidden');
            
            $('.item-baixo').slick('slickUnfilter');
            
            var classefiltrada = '.' + $("input[name='filter-marca-baixo']:checked").val();            

            if(classefiltrada !== '.Tudo'){
                $('.item-baixo').slick('slickFilter', classefiltrada);
                filtered = true;
            }else if(filtered === true){
                $('.item-baixo').slick('slickUnfilter');
                filtered = false;
            }
        })

        $('.cancel-modal-marca-baixo').on('click', event => {
            $('.marca-modal-baixo').addClass('hidden');
        })

        $('.looksProntos').on('click', event => {
            window.location.href = './php/list-products.php?fltr=looks'
        })
    </script>
        
</body>
</html>