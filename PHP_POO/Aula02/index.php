<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php
        //a classe caneta vai ser carregada dentro do index.php
        require_once 'Caneta.php';
        //instanciando um objeto caneta
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        //tampando a caneta com o metodo tampar
        $c1->tampar();
        //mostra o estado atual desse objeto. 
        print_r($c1);
        echo "<br>";

//========================================================================================
         //instanciando um novo objeto caneta
         $c2 = new Caneta;
         $c2->cor = "Verde";
         $c2->carga = 50;
         $c2->tampar();//caneta tampada

         //mostra o estado atual desse objeto. 
         print_r($c2);






        

    ?>
</body>
</html>