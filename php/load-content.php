<?php

    if(isset($_POST['method']) && $_POST['method'] == 'loadContentCima'){
        loadContentCima();
    }else if(isset($_POST['method']) && $_POST['method'] == 'loadContentBaixo'){
        loadContentBaixo();
    }

    


    function loadContentCima(){
        include "conexao.php";
        $id = $_POST['idCima'];

        $query = 'SELECT pecas.tipo, pecas.marca, pecas.descricao, pecas.preco, tamanhos.tamanho FROM prodcima
        INNER JOIN pecas ON pecas.idPecas = prodcima.idPeca 
        INNER JOIN tamanhos ON tamanhos.idTam = prodcima.idTam
        WHERE `idPeca` = ' . $id;
        $resultado = $conector->query($query);

        $resultado = mysqli_fetch_assoc($resultado);
        $preco = str_replace('.',',',$resultado['preco']);

        echo '<h1 class="marca-tipo">'.$resultado['tipo'].' - '.$resultado['marca'].'</h1>';
        echo '<span class="desc">'.$resultado['descricao'].'</span>';
        echo '<div class="filtro-cores"><span>Cores:</span><div class="colorFilterShow"></div></div>';
        echo '<div class="tamanho-show">Tamanho: '.$resultado['tamanho'].'</div>';
        echo '<h1 class="preco">R$ '.$preco.'</h1>';
    }

    function loadContentBaixo(){
        include "conexao.php";
        $id = $_POST['idBaixo'];

        $query = 'SELECT pecas.tipo, pecas.marca, pecas.descricao, pecas.preco, tamanhos.tamanho FROM prodbaixo
        INNER JOIN pecas ON pecas.idPecas = prodbaixo.idPeca 
        INNER JOIN tamanhos ON tamanhos.idTam = prodbaixo.idTam
        WHERE `idPeca` = ' . $id;
        $resultado = $conector->query($query);

        $resultado = mysqli_fetch_assoc($resultado);
        $preco = str_replace(".", ",", $resultado['preco']);

        echo '<h1 class="marca-tipo">'.$resultado['tipo'].' - '.$resultado['marca'].'</h1>';
        echo '<span class="desc">'.$resultado['descricao'].'</span>';
        echo '<div class="tamanho-show">Tamanho: '.$resultado['tamanho'].'</div>';
        echo '<h1 class="preco">R$ '.$preco.'</h1>';
    }


?>