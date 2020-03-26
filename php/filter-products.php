<?php 
    include "conexao.php";

    function ImprimeFiltro($filter){
        switch($filter){
            case 'superior':
                ConsultaGeral('cima');
            break;
            case 'inferiores':
                ConsultaGeral('baixo');
            break;
            case 'blusas':
                Consulta('cima', 'Blusa');
            break;
            case 'croppeds':
                Consulta('cima', 'Cropped');
            break;
            case 'tops':
                Consulta('cima', 'Top');
            break;
            case 'moletons':
                Consulta('cima', 'Moletom');
            break;
            case 'calcas':
                Consulta('baixo', 'Calça');
            break;
            case 'bermudas':
                Consulta('baixo', 'Bermuda');
            break;
            case 'shorts':
                Consulta('baixo', 'Short');
            break;
            case 'saias':
                Consulta('baixo', 'Saia');
            break;
            case 'novidades':
                ConsultaModa('novidades');
            break;
            case 'inverno':
                ConsultaModa('inverno');
            break;
            case 'verao':
                ConsultaModa('verao');
            break;
            case 'fitness':
                ConsultaModa('fitness');
            break;
            case 'sale':
                ConsultaModa('sale');
            break;
            case 'looks':
                ImprimeLooks();
            break;

        }
    }

    function ImprimeLooks(){
        include "conexao.php";

        $sql = "SELECT * FROM look";
        $consulta = $conector->query($sql);

        while($dados = $consulta->fetch_array()){
            echo '<div class="productCard" pos="cima"><img src=".'.$dados["srcImg"].'"><strong class="productTipoMarca">Combinação - '.$dados["idLook"].'</strong><strong class="productPreco">R$ '.str_replace('.',',',$dados["preco"]).'</strong></div>';
        }

    }

    function ConsultaModa($moda){
        include "conexao.php";

        $sql = "SELECT * FROM $moda";
        $consultaModa = $conector->query($sql);

        while($info = $consultaModa->fetch_array()){
            if($info['idProdCima'] !== NULL){
                $sql = "SELECT prodcima.idPeca, tamanhos.tamanho, cores.cor, pecas.idPecas, prodcima.srcImgFrente, pecas.tipo, pecas.preco, pecas.descricao, pecas.marca FROM prodcima
                INNER JOIN pecas ON prodcima.idPeca = pecas.idPecas
                INNER JOIN tamanhos ON prodcima.idTam = tamanhos.idTam
                INNER JOIN cores ON prodcima.idCor = cores.idCores
                WHERE id = ".$info['idProdCima'];
                $consultaProdcima = $conector->query($sql);
                while($dados = $consultaProdcima->fetch_array()){
                    echo '<div class="productCard '.$dados['tipo'].' '.$dados['marca'].' '.$dados['tamanho'].' '.$dados['cor'].' " id="'.$dados["idPeca"].'" pos="cima"><img src=".'.$dados["srcImgFrente"].'"><strong class="productTipoMarca">'.$dados["tipo"].' - '.$dados["marca"].'</strong><strong class="productPreco">R$ '.str_replace('.',',',$dados["preco"]).'</strong></div>';
                }
            }else if($info['idProdBaixo'] !== NULL){
                $sql = "SELECT prodbaixo.idPeca, tamanhos.tamanho, cores.cor, pecas.idPecas, prodbaixo.srcImgFrente, pecas.tipo, pecas.preco, pecas.descricao, pecas.marca FROM prodbaixo
                INNER JOIN pecas ON prodbaixo.idPeca = pecas.idPecas
                INNER JOIN tamanhos ON prodbaixo.idTam = tamanhos.idTam 
                INNER JOIN cores ON prodbaixo.idCor = cores.idCores
                WHERE id = ".$info['idProdBaixo'];
                $consultaProdbaixo = $conector->query($sql);
                while($dados = $consultaProdbaixo->fetch_array()){
                    echo '<div class="productCard '.$dados['tipo'].' '.$dados['marca'].' '.$dados['tamanho'].' '.$dados['cor'].'" id="'.$dados["idPeca"].' " pos="baixo"><img src=".'.$dados["srcImgFrente"].'"><strong class="productTipoMarca">'.$dados["tipo"].' - '.$dados["marca"].'</strong><strong class="productPreco">R$ '.str_replace('.',',',$dados["preco"]).'</strong></div>';
                }
            }
        }
    }

    function ImprimeGeral(){
        ConsultaGeral('cima');
        ConsultaGeral('baixo');
    }

    function ConsultaGeral($pos){
        include "conexao.php";

        $sql = "SELECT prod".$pos.".idPeca, tamanhos.tamanho, pecas.idPecas, prod".$pos.".srcImgFrente, pecas.tipo, pecas.preco, pecas.descricao, pecas.marca 
        FROM pecas
        INNER JOIN prod".$pos." ON pecas.idPecas = prod".$pos.".idPeca
        INNER JOIN prod".$pos." ON tamanhos.idTam = prod".$pos.".idTam";

        $resultado = $conector->query($sql);
        while($dados = $resultado->fetch_array()){
            echo '<div class="productCard '.$dados["tipo"].' '.$dados["marca"].' '.$dados["tamanho"].'" id="'.$dados["idPeca"].'" pos="'.$pos.'"><img src=".'.$dados["srcImgFrente"].'"><strong class="productTipoMarca">'.$dados["tipo"].' - '.$dados["marca"].'</strong><strong class="productPreco">R$ '.str_replace('.',',',$dados["preco"]).'</strong></div>';
        }
    }
    function Consulta($pos, $tipo){
        include "conexao.php";

        $sql = "SELECT prod".$pos.".idPeca, cores.cor, tamanhos.tamanho, pecas.idPecas, prod".$pos.".srcImgFrente, pecas.tipo, pecas.preco, pecas.descricao, pecas.marca 
        FROM pecas
        INNER JOIN prod".$pos." ON pecas.idPecas = prod".$pos.".idPeca
        INNER JOIN prod".$pos." ON tamanhos.idTam = prod".$pos.".idTam
        INNER JOIN prod".$pos." ON cores.idCores = prod".$pos.".idCor
        WHERE pecas.tipo = '".$tipo."'";

        $resultado = $conector->query($sql);
        while($dados = $resultado->fetch_array()){
            echo '<div class="productCard '.$dados['tipo'].' '.$dados['marca'].' '.$dados['tamanho'].' '.$dados['cor'].'" id="'.$dados["idPeca"].'"  pos="'.$pos.'"><img src=".'.$dados["srcImgFrente"].'"><strong class="productTipoMarca">'.$dados["tipo"].' - '.$dados["marca"].'</strong><strong class="productPreco">R$ '.str_replace('.',',',$dados["preco"]).'</strong></div>';
        }
    }
?>