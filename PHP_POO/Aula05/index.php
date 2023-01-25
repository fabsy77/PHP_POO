<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            $p1 = new ContaBanco();//Julibeu
            $p2 = new ContaBanco();//Creusa
            $p1->abrirConta("CC");
            $p1->setnumConta(1111);
            $p1->setDono("Jubileu");
            $p2->abrirConta("CP");
            $p2->setnumConta(2222);
            $p2->setDono("Creusa");
            
            //fazendo deposito
            $p1->depositar(300);
            $p2->depositar(500);

            //Saque
            $p2->sacar(1000);

            //pagando mensalidade
            $p1->pagarMensal();
            $p2->pagarMensal();
            
            //sacando para zerar as contas
            $p1->sacar(338);
            $p2->sacar(630);

            //fechar conta
            $p1->fecharConta();
            $p2->fecharConta();

            print_r($p1);
            print_r($p2);
        ?>
        </pre>
    </div>
</body>
</html>