<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
</head>
<body>
    <pre>
        <?php
        require_once "Animal.php";
        require_once "especies/Mamifero.php";
        require_once "especies/Reptil.php";
        require_once "especies/mamiferos/Cachorro.php";
        require_once "especies/mamiferos/Canguru.php";
        require_once "especies/reptil/Cobra.php";
        $c1 = new Cachorro('preto');
        $c2 = new Canguru("amarelo");
        $c3 = new Cobra("Verde");
        $c1->setIdade(5);
        $c1->locomover();
        print_r($c1);
        $c2->locomover();
        print_r($c2);
        $c3->locomover();
        $c3->setPeso(45);
        print_r($c3);
        ?>
    </pre>
</body>
</html>