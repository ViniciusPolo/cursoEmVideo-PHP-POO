<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>
<body>
    <pre>
        <?php
            require_once "Livro.php";
            require_once "Pessoa.php";
            require_once "Publicacao.php";

            $p = array();
            $p[0] = new Pessoa('Tião', 35, 'M');
            $p[1] = new Pessoa('Chica', 40, 'F');
            $p[2] = new Pessoa('Gertrudes', 75, 'NB');

            $l = array();
            $l[0] = new Livro('A Revolta','Mike Tyson', 350, true, $p[0]);

            $l[0]->abrir();
            $l[0]->setPagAtual(123);
            $l[0]->detalhes();
            print_r($l[0]);
            $l[0]->fechar();
            $l[0]->detalhes();
            print_r($l[0]);


        ?>
    </pre>
</body>
</html>