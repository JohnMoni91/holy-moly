<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
</head>

<body>
<h1>1 pergunta</h1>
    <?php
    $a=73;
    $b=30;
    
    $resu= ($a+$b)*$a;
        echo "Resultado da operação foi: " .$resu;
    ?> 

    <h1>2 pergunta</h1>
    <?php
    $valor_um= 17;
    $valor_dois= 15;
    $valor_tres= 14;

    $media= ($valor_dois+$valor_tres+$valor_um)/3;
    echo "Seu resultado muito lindo: " .$media;
    ?> 

<h1>3 pergunta</h1>
    <?php
    $valo= 580;

    $resulo= $valo*0.15;
    echo "O resultado fica: " .$resulo;
    ?> 

<h1>4 pergunta</h1>
    <?php
    $valor= 9530;

    $resulo1= $valor*0.05;
    $resulo2= $valor*0.50;
    echo "O resultado fica: " .$resulo1. " e " .$resulo2;
    ?> 

<h1>5 pergunta</h1>
    <?php
    $valor_uno= 40;
    $valor_duo= 50;

    $reso1= (40*40);
    $reso2= (50*50);
    $relofina= ($reso1+$reso2);
    echo "O resultado fica: " .$relofina;
    ?> 

<h1>6 pergunta</h1>
    <?php
    $veloSegundo= 40;
 
    $relofina= ($veloSegundo*3.6);
    echo "Ele percorreu por: " .$relofina. "km";
    ?> 

<h1>7 pergunta</h1>
    <?php
    $altura= 1.74;
    $peso= 79;

    $imc= $peso / ($altura*$altura);
    if ($imc>=0 && $imc<=16.9) {
        echo "Seu IMC é " .$imc. " indica que você esteja muito abaixo do peso";
    }


    if ($imc>=17 && $imc<=18.4) {
        echo "Seu IMC é" .$imc. " indica que você esteja abaixo do peso";
    }


    if ($imc>=18.5 && $imc<=24.9) {
        echo "Seu IMC é " .$imc. " indica que você esteja com peso normal";
    }
    
    if ($imc>=25 && $imc<=29.9) {
        echo "Seu IMC é " .$imc. " indica que você esteja acima do peso";
    }


    if ($imc>=30 && $imc<=34.9) {
        echo "Seu IMC é " .$imc. " indica que você esteja com obesidade grau I";
    }

    if ($imc>=35 && $imc<=40) {
        echo "Seu IMC é " .$imc. " indica que você esteja com obesidade grau II";
    }

    if ($imc>=40) {
        echo "Seu IMC é " .$imc. " indica que você esteja com obesidade grau III";
    }
    ?>

<h1>8 pergunta</h1>
    <?php
    $vali= 80;

    $repo1= $vali*0.09;
    $ter= ($vali-$repo1);
    echo "O resultado fica: " .$ter;
    ?> 

<h1>9 pergunta</h1>
    <?php
    $valir= 450;

    $repu1= $valir*0.07;
    $tarr= ($valir-$repo1);
    echo "Valor original: " .$valir. " quanto que ficou a promoção: " .$tarr. " e o valor descontado: " .$repu1;
    ?> 

<h1>10 pergunta</h1>
    <?php
    $alturar= 8;
    $largura= 7;
    $comprimento= 7;

    $volume= ($largura*$alturar*$comprimento);
        echo "Volume: " .$volume;
    ?>

<h1>11 pergunta</h1>
    <?php
    $valro= 360;

    $resaulo= $valro*0.27;
    echo "O resultado fica: " .$resaulo;
    ?> 

<h1>12 pergunta</h1>
    <?php
        $valu_basemaior= 29;
        $valu_basemenor= 14;
        $valu_altura= 24;
    
        $trapezio= (($valu_basemaior+$valu_basemenor)*$valu_altura)/2;
        echo "Seu resultado do trapezio " .$trapezio;    
    ?>

<h1>13 pergunta</h1>
    <?php
        $nota1= 9; // peso 2
        $nota2= 1; // peso 3
        $nota3= 4; // peso 5
    
        $pode= ($nota1*2+$nota2*3+$nota3*5)/10;
        echo "Seu resultado da media " .$pode;    
    ?>

<h1>14 pergunta</h1>
    <?php
        $trampo= 70;

        $vli= ($trampo*0.16)+$trampo;
        $pudep= ($vli/10);
            echo "Valor total: " .$vli. " e valor parcelado: " .$pudep;
    ?>

<h1>15 pergunta</h1>
    <?php
        $km= 120;
        $litros= 150;

        $midu= ($km/$litros);
            echo "Resultado: " .$midu;
    ?>

</body>

</html>