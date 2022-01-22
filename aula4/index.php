<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Get and Set</title>
</head>
<body>
    <pre>

        <?php
        require_once 'Caneta.php'; //chamando a classe
        
        $c1 = new Caneta("Verde","Guarany",0.5);
        $c1->getModelo();
        $c1->setPonta(1.5);
        print "<br>Eu tenho um caneta {$c1->getModelo()} de ponta {$c1->getPonta()} mm<br>";

        $c2 = new Caneta("Azul","Bic",1.5);
        print_r ($c2);
        
        
        ?>
</body>
</pre>
</html>