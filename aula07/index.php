<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    require_once "Lutador.php";
    require_once "Luta.php";
        $l = array();
        $l[0]=  new Lutador("Pretty Boy", "Brasil", 30, 1.65, 70, 5, 1, 1);
        $l[1]=  new Lutador("Cigano", "Argentina", 25, 1.65, 100, 5, 1, 1);
        $l[2]=  new Lutador("Mutant", "EUA", 32, 1.65, 90, 5, 1, 1);
        $l[3]=  new Lutador("El Loco", "Espanha", 21, 1.65, 63.5, 5, 1, 1);
        $l[4]=  new Lutador("Tractor", "Australia", 28, 1.65, 70, 5, 1, 1);
        $l[5]=  new Lutador("El Chef", "França", 39, 1.65, 70, 5, 1, 1);
        $l[6]=  new Lutador("Honda", "Japão", 41, 1.65, 70, 5, 1, 1);
        /*$l[0]->status();
        $l[1]->status();
        print_r($l[1]);
        $l[1]->ganharLuta();
        $l[1]->perderLuta();
        $l[1]->empatarLuta();
        $l[1]->ganharLuta();
        $l[1]->status();
        $l[1]->apresentar();
        print_r($l[1]);
        print_r($l[0]);*/
        $uec01 = new Luta;
        $uec01->marcarLuta($l[0],$l[5]);
        $uec01->lutar();
        print_r($uec01);
        $uec01->lutar();
        print_r($uec01);
        $uec02 = new Luta;
        $uec02->marcarLuta($l[1],$l[3]);
        $uec02->lutar();
        print_r($uec02);
        $uec03 = new Luta;
        $uec03->marcarLuta($l[5],$l[6]);
        $uec03->lutar();
        print_r($uec03);

    ?>
    </pre>
</body>
</html>