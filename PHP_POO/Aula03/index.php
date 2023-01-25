<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
    <?php
        //a classe caneta vai ser carregada dentro do index.php
        require_once 'Caneta.php';

        //instanciando um objeto caneta
        $c1 = new Caneta;
        $c1-> modelo = "BIC cristal";
        $c1-> cor = "Azul";
        //$c1->carga = 99;
        $c1->rabiscar();
        $c1->tampar();

        print_r($c1); 
    ?>
     </pre>
</body>
</html>