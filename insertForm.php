<?php

    include_once "./php/conn.php";
    include_once "./php/getInformation.php";

    if($peca_tipo == 'camisa' || $peca_tipo == 'cropped' || $peca_tipo == 'top' || $peca_tipo == 'moletom'){

        $peca_posicao = 0;
        $pasta = './imgs/cima/';

    }else if($peca_tipo == 'calca' || $peca_tipo == 'bermuda' || $peca_tipo == 'short' || $peca_tipo || 'saia'){

        $peca_posicao = 1;
        $pasta = './imgs/baixo/';
    }else{

        $peca_posicao = 2;

    }

    

    $sql = "INSERT INTO pecas (descricao, preco, tipo, posicao, marca ) VALUES ('".$peca_descricao."','".$peca_preco."', '".$peca_tipo."', '".$peca_posicao."', '".$peca_marca."')";

    $conn->query($sql);

    $sql = "SELECT * FROM pecas";
    $consulta = $conn->query($sql);
    $auxID = 0;
    
    while($dados = $consulta->fetch_array()){
        $auxID = $dados['idPecas'];
    }

    //Cima
    if($peca_posicao == 0){


        //Preto
        if($qntPretoPP > 0 || $qntPretoP > 0 || $qntPretoM > 0 || $qntPretoG > 0 || $qntPretoGG > 0){
            $cor = 2;

            if($qntPretoPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                if(move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F) && move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T)){
                    $sql = "INSERT INTO prodcima (idPeca, idCor, idTam, quantidade, srcImgTras, srcImgFrente) VALUES ('".$auxID."', '".$cor."', 1, '".$qntPretoPP."', '".$pasta . $nomeImg_T."', '".$pasta . $nomeImg_F."')";
                    $consulta = $conn->query($sql) or die("erro");
                }

                /*
                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);
                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntPretoPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }
                */

            }

            if($qntPretoP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntPretoP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntPretoM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntPretoM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntPretoG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntPretoG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntPretoGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntPretoGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Branco
        if($qntBrancoPP > 0 || $qntBrancoP > 0 || $qntBrancoM > 0 || $qntBrancoG > 0 || $qntBrancoGG > 0){
            $cor = 3;

            if($qntBrancoPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntBrancoPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntBrancoP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntBrancoM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntBrancoG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntBrancoGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Amarelo
        if($qntAmareloPP > 0 || $qntAmareloP > 0 || $qntAmareloM > 0 || $qntAmareloG > 0 || $qntAmareloGG > 0){
            $cor = 1;

            if($qntAmareloPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntAmareloPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntAmareloP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntAmareloM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntAmareloG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntAmareloGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Azul
        if($qntAzulPP > 0 || $qntAzulP > 0 || $qntAzulM > 0 || $qntAzulG > 0 || $qntAzulGG > 0){
            $cor = 4;

            if($qntAzulPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntAzulPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntAzulP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntAzulM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntAzulG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntAzulGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Verde
        if($qntVerdePP > 0 || $qntVerdeP > 0 || $qntVerdeM > 0 || $qntVerdeG > 0 || $qntVerdeGG > 0){
            $cor = 5;

            if($qntVerdePP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntVerdePP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntVerdeP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntVerdeM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntVerdeG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntVerdeGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Vermelho
        if($qntVermelhoPP > 0 || $qntVermelhoP > 0 || $qntVermelhoM > 0 || $qntVermelhoG > 0 || $qntVermelhoGG > 0){
            $cor = 6;

            if($qntVermelhoPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntVermelhoPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntVermelhoP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntVermelhoM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntVermelhoG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodcima (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntVermelhoGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }

    }


    //Baixo
    if($peca_posicao == 1){


        //Preto
        if($qntPretoPP > 0 || $qntPretoP > 0 || $qntPretoM > 0 || $qntPretoG > 0 || $qntPretoGG > 0){
            $cor = 2;

            if($qntPretoPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntPretoPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntPretoP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntPretoP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntPretoM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntPretoM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntPretoG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntPretoG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntPretoGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                $largura_T = 0;
                $altura_T = 0;
                $largura_F = 0;
                $altura_F = 0;

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_preto']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_preto']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntPretoGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Branco
        if($qntBrancoPP > 0 || $qntBrancoP > 0 || $qntBrancoM > 0 || $qntBrancoG > 0 || $qntBrancoGG > 0){
            $cor = 3;

            if($qntBrancoPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntBrancoPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntBrancoP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntBrancoM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntBrancoG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntBrancoGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_branco']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_branco']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_branco']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_branco']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntBrancoGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Amarelo
        if($qntAmareloPP > 0 || $qntAmareloP > 0 || $qntAmareloM > 0 || $qntAmareloG > 0 || $qntAmareloGG > 0){
            $cor = 1;

            if($qntAmareloPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntAmareloPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntAmareloP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntAmareloM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntAmareloG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAmareloGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_amarelo']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_amarelo']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_amarelo']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_amarelo']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntAmareloGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Azul
        if($qntAzulPP > 0 || $qntAzulP > 0 || $qntAzulM > 0 || $qntAzulG > 0 || $qntAzulGG > 0){
            $cor = 4;

            if($qntAzulPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntAzulPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntAzulP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntAzulM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntAzulG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntAzulGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_azul']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_azul']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_azul']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_azul']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntAzulGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Verde
        if($qntVerdePP > 0 || $qntVerdeP > 0 || $qntVerdeM > 0 || $qntVerdeG > 0 || $qntVerdeGG > 0){
            $cor = 5;

            if($qntVerdePP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntVerdePP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntVerdeP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntVerdeM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntVerdeG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVerdeGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_verde']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_verde']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_verde']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_verde']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntVerdeGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }


        //Vermelho
        if($qntVermelhoPP > 0 || $qntVermelhoP > 0 || $qntVermelhoM > 0 || $qntVermelhoG > 0 || $qntVermelhoGG > 0){
            $cor = 6;

            if($qntVermelhoPP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 1, $qntVermelhoPP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoP > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 2, $qntVermelhoP, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoM > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 3, $qntVermelhoM, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 4, $qntVermelhoG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

            if($qntVermelhoGG > 0){
                $nomeImg_F = $auxID."_".$cor.".jpg";
                $nomeImg_T = $auxID."_".$cor."_T.jpg";

                list($largura_F, $altura_F) = getimagesize($_FILES['Img_frente_vermelho']['tmp_name']);
                list($largura_T, $altura_T) = getimagesize($_FILES['Img_tras_vermelho']['tmp_name']);

                if($largura_F == $altura_F && $largura_T == $altura_T){
                    move_uploaded_file($_FILES['Img_frente_vermelho']['tmp_name'], $pasta . $nomeImg_F);

                    move_uploaded_file($_FILES['Img_tras_vermelho']['tmp_name'], $pasta . $nomeImg_T);

                    $sql = "INSERT INTO prodbaixo (idPecas, idCor, idTamanho, quantidade, srcImgTras, srcImgFrente) VALUES (".$auxID.", $cor, 5, $qntVermelhoGG, $nomeImg_T, $nomeImg_F)";

                    $consulta = $conn -> query($sql);
                }

            }

        }

    }

?>