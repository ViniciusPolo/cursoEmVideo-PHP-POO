<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Conta</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Conta.php';
        $c1 = new Conta;
        $c1->nroconta = 111;
        $c1->setDono("Vinicius");
        $c1->abrirConta('CC');
        $c1->getSaldo();
        $c1->getStatus();
        $c1->depositar(800);
        $c1->pagarMensalidade();
        $c1->sacar(400);  
        $c1->sacar(438);   
        $c1->getSaldo();
        $c1->fecharConta($c1->getSaldo());

        print_r($c1);
    ?>
    </pre>
</body>
</html>