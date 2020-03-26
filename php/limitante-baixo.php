<?php

    include "conexao.php";


    $idPeca = $_POST['id'];


    $query = "SELECT id FROM prodcima WHERE idPeca = ".$idPeca;
    $resultado = $conector->query($query);
    $resultado = mysqli_fetch_assoc($resultado);

    $query = "SELECT idbaixo FROM combinacoes WHERE idcima = ".$resultado['id'];
    $resulta = $conector->query($query);


    while($dados = $resulta->fetch_array()){
        $query = "SELECT pecas.idPecas, srcImgFrente 
        FROM prodbaixo 
        INNER JOIN pecas ON prodbaixo.idPeca = pecas.idPecas
        WHERE id = ".$dados['idbaixo'];

        $result = $conector->query($query);
        $result = mysqli_fetch_assoc($result);

        echo "<div id='".$result['idPecas']."' class='imagem-baixo itens'><img data-lazy='".$result['srcImgFrente']."'></div>";

        
    }


?>