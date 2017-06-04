<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funções Aritméticas</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="">
      <h3>Funções Aritméticas</h3>
      <?php
        $numero1 = $_GET["x"];
        $numero2 = $_GET["y"];

        $abs = abs($numero2);
        $pow = pow($numero1, $numero2);
        $sqrt = sqrt($numero1);
        $round = round($numero2); //ceil arredonda para cima e floor arredonda para baixo
        $intval = intval($numero2);
        $numberFormat = number_format($numero1, 2, ",", ".");

        echo "O valor absoluto de $numero2 é $abs";
        echo "<br>O valor de $numero1<sup>$numero2</sup> é $pow";
        echo "<br>O valor da raiz quadrada de $numero1 é $sqrt";
        echo "<br>O valor arredondado de $numero2 é $round";
        echo "<br>O valor da parte inteira de $numero2 é $intval";
        echo "<br>O valor de $numero1 em moeda é R$".$numberFormat;
       ?>
    </div>
  </body>
</html>
