<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Espaço D</title>
    <link rel="shortcut icon" href="./imgs/icones/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/home.css">
</head>
<body>
    <main class="mainWrapper">
        <header class="header">
            <h1>ESPAÇO  </h1>
            <img src="./imgs/icones/logo.png" alt="logo">
        </header>
        <nav class="menu">
            <div class="container">
                <ul>
                    <li><a href="./php/list-products.php?fltr=novidades">Novidades</a></li>
                    <li><a href="./php/list-products.php?fltr=inverno">Moda inverno</a></li>
                    <li><a href="./php/list-products.php?fltr=verao">Moda verão</a></li>
                    <li><a href="./php/list-products.php?fltr=sale">Sale</a></li>
                    <li class="montarLook"><a href="carousel.php">Montar look!</a></li>
                </ul>
            </div>
        </nav>
        <section class="homeContent">
            <div class="sliderMain">
                <div class="carouselMain">
                    <div class="singleItem">
                        <img src="./imgs/home/CarouselHome.png">
                    </div>
                </div>
            </div>
        </section>
        <section class="productsContent gridProducts">
            <div class="blusas">
                <div class="blusasContent">
                    <h1>Novidades</h1>
                    <div class="gotoBlusas"><a href="./php/list-products.php?fltr=novidades">Veja todas!</a></div>
                </div>
                <div class="backgroundBlusas"></div>
            </div>
            <div class="moletons">
                <div class="moletonsContent">
                        <h1>Moda Inverno</h1>
                        <div class="gotoMoletons"><a href="./php/list-products.php?fltr=inverno">Veja todos!</a> </div>
                    </div>
                    <div class="backgroundMoletons"></div>
                </div>
            <div class="shorts">
                <div class="shortsContent">
                        <h1>Moda Verão</h1>
                        <div class="gotoShorts"><a href="./php/list-products.php?fltr=verao">Veja todos!</a></div>
                    </div>
                    <div class="backgroundShorts"></div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        // Slider principal
        $('.singleItem').slick({
            nextArrow: $('.nextArrow'),
            prevArrow: $('.prevArrow'),
            autoplay: true,
            autoplaySpeed: 2000
        }
        );
    </script>
    <script>
        $('.blusas').mouseover(() => {
            $('.backgroundBlusas').css('filter', 'brightness(50%)')
        });
        $('.blusas').mouseout(() => {
            $('.backgroundBlusas').css('filter', 'brightness(80%)')
        });
        $('.moletons').mouseover(() => {
            $('.backgroundMoletons').css('filter', 'brightness(50%)')
        });
        $('.moletons').mouseout(() => {
            $('.backgroundMoletons').css('filter', 'brightness(80%)')
        });
        $('.shorts').mouseover(() => {
            $('.backgroundShorts').css('filter', 'brightness(50%)')
        });
        $('.shorts').mouseout(() => {
            $('.backgroundShorts').css('filter', 'brightness(80%)')
        })
    </script>
</body>
</html>