<?php
    include "filter-products.php";

    if(isset($_GET['fltr'])){
        $filter = $_GET['fltr'];
        $filterTitle = ucfirst($filter);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../imgs/icones/logo.png" type="image/x-icon">
    <title><?php if(isset($filterTitle)) echo "Filtrando ".$filterTitle; else echo "Filtrando Tudo";?></title>
    <link rel="stylesheet" href="../css/filtro.css">
</head>
<body>
    <main class="mainWrapper">
        <header class="header">
            <h1>ESPAÇO  </h1>
            <a href="../index.php"><img src="../imgs/icones/logo.png" alt="logo"></a>
        </header>
        <nav class="menu">
            <div class="container">
                <ul>
                    <li><a href="../php/list-products.php?fltr=novidades">Novidades</a></li>
                    <li><a href="../php/list-products.php?fltr=inverno">Moda inverno</a></li>
                    <li><a href="../php/list-products.php?fltr=verao">Moda verão</a></li>
                    <li><a href="../php/list-products.php?fltr=sale">Sale</a></li>
                    <li class="montarLook"><a href="../carousel.php">Montar look!</a></li>
                </ul>
            </div>
        </nav>
        <section class="explicandoParte">
            <h1 id="filtroAtual"><?php if(isset($filterTitle)) echo $filterTitle; else echo "Tudo"; ?></h1>
        </section>
        <section class="products">
            <div class="filtroLateral">
                <div class="categoriaTrigger">Categorias</div>
                <ul class="categoriaList hidden">
                    <li><label><input type="radio" name="categoriaFilter" value="Tudo" checked>Tudo</label></li>
                    <li><label><input type="radio" name="categoriaFilter" value="Blusa">Blusas</label></li>
                    <li><label><input type="radio" name="categoriaFilter" value="Camisa">Camisas</label></li>
                    <li><label><input type="radio" name="categoriaFilter" value="Camiseta">Camisetas</label></li>
                    <li><label><input type="radio" name="categoriaFilter" value="Casaco">Casacos</label></li>
                    <li><label><input type="radio" name="categoriaFilter" value="Saia">Saias</label></li>
                    <li><label><input type="radio" name="categoriaFilter" value="Short">Shorts</label></li>
                    <li><label><input type="radio" name="categoriaFilter" value="Calça">Calças</label></li>
                </ul>
                <div class="tamanhoTrigger">Tamanhos</div>
                <div class="tamanhoList" style="display: none">
                    <label><input type="radio" name="tamanhoFilter" value="Tudo" checked>Tudo</label>
                    <label><input type="radio" name="tamanhoFilter" value="PP">PP</label>
                    <label><input type="radio" name="tamanhoFilter" value="P">P</label>
                    <label><input type="radio" name="tamanhoFilter" value="M">M</label>
                    <label><input type="radio" name="tamanhoFilter" value="G">G</label>
                    <label><input type="radio" name="tamanhoFilter" value="GG">GG</label>
                </div>
                <div class="marcaTrigger">Marcas</div>
                <div class="marcaList hidden">
                    <ul>
                        <li><label><input type="radio" name="marcaFilter" value="Tudo" checked>Tudo</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Mandoras">Mandoras</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Amaro">Amaro</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Renner">Renner</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="C&A">C&A</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Enjoei">Enjoei</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Posthaus">Posthaus</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Marisa">Marisa</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Zattini">Zattini</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="CódigoGiirls">Código Giirls</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Kanui">Kanui</label></li>
                        <li><label><input type="radio" name="marcaFilter" value="Dafiti">Dafiti</label></li>
                    </ul>
                </div>
                <div class="colorTrigger">Cores</div>
                <div class="colorList" style="display: none">
                    <!-- "#f4dc42", "#000", "#fff", "#2fa3fc", "#31b238", "#f00", "#826655", "#ffc6ec", "#888" -->
                    <div class="colorSphere yellow"></div>
                    <div class="colorSphere black"></div>
                    <div class="colorSphere white"></div>
                    <div class="colorSphere blue"></div>
                    <div class="colorSphere green"></div>
                    <div class="colorSphere red"></div>
                    <div class="colorSphere brown"></div>
                    <div class="colorSphere pink"></div>
                    <div class="colorSphere gray"></div>
                </div>

            </div>
            <div class="showProducts">
                <?php
                    if(isset($filter)){
                        ImprimeFiltro($filter);
                    }else{
                        ImprimeGeral();
                    }
                ?>
            </div>
        </section>        
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $('.categoriaTrigger').on('click', event => {
            $('.categoriaList').slideToggle();
        })

        $('.marcaTrigger').on('click', event => {
            $('.marcaList').slideToggle();
        });

        $('.tamanhoTrigger').on('click', event => {
            $('.tamanhoList').slideToggle();
        })

        $('.colorTrigger').on('click', event => {
            $('.colorList').slideToggle();
        });

        $('input[name=categoriaFilter]').on('change', event => {
            $('input[value=Tudo][name=marcaFilter]').prop('checked', true);
            $('input[value=Tudo][name=tamanhoFilter]').prop('checked', true);
            const value = $('input[name=categoriaFilter]:checked').val();
            
            if(value !== 'Tudo'){
                $('.showProducts').children().hide();
                console.log('.'+value);
                $('.'+value).show();
            }else{
                $('.showProducts').children().show();
            }
        });

        $('input[name=tamanhoFilter]').on('change', event => {
            $('input[value=Tudo][name=marcaFilter]').prop('checked', true);
            $('input[value=Tudo][name=categoriaFilter]').prop('checked', true);
            const value = $('input[name=tamanhoFilter]:checked').val();
            
            if(value !== 'Tudo'){
                $('.showProducts').children().hide();
                
                $('.'+value).show();
            }else{
                $('.showProducts').children().show();
            }
        })

        $('input[name=marcaFilter]').on('change', event => {
            $('input[value=Tudo][name=categoriaFilter]').prop('checked', true);
            $('input[value=Tudo][name=tamanhoFilter]').prop('checked', true);
            const value = $('input[name=marcaFilter]:checked').val();

            if(value !== 'Tudo'){
                $('.showProducts').children().hide();
                
                $('.'+value).show();
            }else{
                $('.showProducts').children().show();
            }
        })

        //COLOR FILTERS

        $('.colorSphere').on('click', event => {
            const color = event.target.classList[1];

            $('.showProducts').children().hide();
            const value = renameColors(color)
            $('.'+value).show();
        })

        function renameColors(color){
            switch(color){
                case 'yellow':
                    return 'amarelo';
                break;
                case 'black':
                    return 'preto';
                break;
                case 'white':
                    return 'branco';
                break;
                case 'blue':
                    return 'azul';
                break;
                case 'green':
                    return 'verde';
                break;
                case 'red':
                    return 'vermelho';
                break;
                case 'brown':
                    return 'marrom';
                break;
                case 'pink':
                    return 'rosa';
                break;
                case 'gray':
                    return 'cinza';
                break;
            }
        }

        $(document).ready(() => {
            let filtroAtual = $('#filtroAtual').text();
                
            console.log(filtroAtual);

            if(filtroAtual === 'looks' || filtroAtual === 'Looks' ){
                $('.filtroLateral').addClass('hidden');
            }
        })
    </script>
</body>
</html>