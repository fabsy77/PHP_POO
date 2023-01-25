<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04 - POO</title>
</head>
<body>
    <pre>
    <?php
        //a classe caneta vai ser carregada dentro do index.php
        require_once 'Caneta.php';

        //instanciando um objeto caneta
        $c1 = new Caneta("BIC", "Azul", 0.5);
        $c2 = new Caneta("Labra", "verde", 0.7);
        
        print_r($c1);
        print_r($c2);

    ?>
     </pre>
</body>
</html>