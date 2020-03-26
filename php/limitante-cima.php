<?php

    include "conexao.php";


    $idPeca = $_POST['id'];


    $query = "SELECT id FROM prodbaixo WHERE idPeca = ".$idPeca;
    $resultado = $conector->query($query);
    $resultado = mysqli_fetch_assoc($resultado);

    $query = "SELECT idcima FROM combinacoes WHERE idbaixo = ".$resultado['id'];
    $resulta = $conector->query($query);


    while($dados = $resulta->fetch_array()){
        $query = "SELECT pecas.idPecas, srcImgFrente
        FROM prodcima
        INNER JOIN pecas ON prodcima.idPeca = pecas.idPecas
        WHERE id = ".$dados['idcima'];

        $result = $conector->query($query);
        $result = mysqli_fetch_assoc($result);

        echo "<div id='".$result['idPecas']."' class='imagem-cima itens'><img data-lazy='".$result['srcImgFrente']."'></div>";

        
    }


?>