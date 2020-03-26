<?php
    
    $idPeca = $_POST['idCima'];
    getColors($idPeca);


    function getColors($idPeca){

        include "conexao.php";
        /*
            Indicies e cores HEX:

            1 - Amarelo
            2 - Preto
            3 - Branco
            4 - Azul
            5 - Verde
            6 - Vermelho
            7 - Marrom
            8 - Rosa
            9 - Cinza
        */
        
        $hex = ["","#f4dc42", "#000", "#fff", "#2fa3fc", "#31b238", "#f00", "#826655", "#ffc6ec", "#888"];

        
        $sql = "SELECT cores.idCores, pecas.idPecas, srcImgFrente FROM prodcima
                INNER JOIN pecas ON prodcima.idPeca = pecas.idPecas
                INNER JOIN cores ON prodcima.idCor  = cores.idCores
                WHERE pecas.idPecas = $idPeca
                GROUP BY prodcima.idCor";

        $resultado = $conector->query($sql);
            
        $cores = [];
        
            
        while($dados = $resultado->fetch_array()){
            array_push($cores, $dados['idCores']);
        }
        
        foreach($cores as $valor){
            echo '<div class="cores" imgPath="'.$idPeca.'_'.$valor.'" style="background-color: '.$hex[$valor].'; border: solid 1px #000; margin: 0 2px 0 0;"></div>';
        }
    }


?>