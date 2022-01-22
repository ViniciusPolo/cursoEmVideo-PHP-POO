<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Visibilidade</title>
</head>
<body>
    <?php
        require_once 'Caneta_3.php'; //chamando a classe
        $c1 = new Caneta_3;  //criação de ojeto
        $c1->cor = "Azul"; //instancia do objeto
        //$c1->ponta = 0.5;
        //$c1->tampada = false;
        $c1->modelo = "Bic Cristal";
        $c1->tampar();
        $c1->rabiscar();
        $c1->destampar();
        $c1->rabiscar();

        $c2 = new Caneta_3;  //criação de ojeto
        $c2->cor = "Verde"; //instancia do objeto
        //$c2->ponta = 0.7;
        //$c2->tampada = false;
        $c2->modelo = "Caneta fluorescente";
        $c2->tampar();
        $c2->rabiscar();
        $c2->destampar();
        $c2->rabiscar();

        //var_dump($c1);
        print_r($c1);
        print_r($c2);

    ?>
</body>
</html>