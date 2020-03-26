<?php
    
    include "conexao.php";

    function imprimirImg($id, $pos){
        include "conexao.php";

        if($pos == 'cima'){
            $query = "SELECT pecas.idPecas, srcImgFrente FROM prodcima 
            INNER JOIN pecas ON prodcima.idPeca = pecas.idPecas
            WHERE prodcima.idPeca = ".$id." GROUP BY pecas.idPecas";
            
            $resultado = $conector->query($query);
            //PEGA AS CORES
            while($dados = $resultado->fetch_array()){
                echo '<div id="'. $dados['idPecas'] .'" class="imagem-cima itens"><img id="'.$dados['idPecas'].'" src="' . $dados['srcImgFrente'] . '" ></div>';
            }
        }else{
            $query = "SELECT pecas.idPecas, srcImgFrente, pecas.tipo, pecas.marca, tamanhos.tamanho FROM prodcima 
            INNER JOIN tamanhos ON prodcima.idTam = tamanhos.idTam
            INNER JOIN pecas ON prodcima.idPeca = pecas.idPecas
            GROUP BY pecas.idPecas";
        
            $resultado = $conector->query($query);

            while($dados = $resultado->fetch_array()){
                echo '<div id="'. $dados['idPecas'] .'" class="imagem-cima itens '.str_replace(' ', '', $dados['marca']) .' tamanho'.$dados['tamanho'].' '.$dados['tipo'].'"><img data-lazy="' . $dados['srcImgFrente'] . '" ></div>';
            }
        }
        
    }

    function imprimirImgBaixo(){
        include "conexao.php";
        $query = "SELECT pecas.idPecas, srcImgFrente, pecas.tipo, pecas.marca, tamanhos.tamanho FROM prodbaixo
        INNER JOIN tamanhos ON prodbaixo.idTam = tamanhos.idTam
        INNER JOIN pecas ON prodbaixo.idPeca = pecas.idPecas
        GROUP BY pecas.idPecas";

        $resultado = $conector->query($query);

        while($dados = $resultado->fetch_array()){
            echo '<div id="'. $dados['idPecas'] .'" class="imagem-baixo itens '.str_replace(' ', '', $dados['marca']).' tamanho'.$dados['tamanho'].'  '.$dados['tipo'].'"><img data-lazy="' . $dados['srcImgFrente'] . '" ></div>';
        }
    }

    function imprimirImgInvertida($id, $pos){
        include "conexao.php";

        if($pos == 'baixo'){
            $query = "SELECT pecas.idPecas, srcImgFrente FROM prodbaixo 
            INNER JOIN pecas ON prodbaixo.idPeca = pecas.idPecas
            WHERE prodbaixo.idPeca = ".$id." GROUP BY pecas.idPecas";            
            
            $resultado = $conector->query($query);
            //PEGA AS CORES
            while($dados = $resultado->fetch_array()){
                echo '<div id="'. $dados['idPecas'] .'" class="imagem-baixo itens"><img id="'.$dados['idPecas'].'" src="' . $dados['srcImgFrente'] . '" ></div>';
            }
        }else{
            $query = "SELECT pecas.idPecas, srcImgFrente FROM prodbaixo 
            INNER JOIN pecas ON prodbaixo.idPeca = pecas.idPecas
            GROUP BY pecas.idPecas";
        
            $resultado = $conector->query($query);

            while($dados = $resultado->fetch_array()){
                echo '<div id="'. $dados['idPecas'] .'" class="imagem-baixo itens"><img data-lazy="' . $dados['srcImgFrente'] . '" ></div>';
            }
        }
    }
?>