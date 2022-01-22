<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula Final</title>
</head>
<body>
    <pre>
        <?php
            require_once "Video.php";
            require_once "AcoesVideo.php";
            require_once "Pessoa.php";
            require_once "Gafanhoto.php";
            require_once "Visualizacao.php";
            $v[0]= new Video('Motivação');
            $v[1]= new Video('Liderança'); 
            $v[2]= new Video('Transição de Carreira');
            
            $g[0]= new Gafanhoto('Mario',15,'M','quemario');
            $g[1]= new Gafanhoto('Tião',23,'M','Tiana'); 
            $g[2]= new Gafanhoto('Chica',31,'F','Fran');
            $g[2]->viuMaisUm();
            $g[2]->viuMaisUm();
            $g[2]->viuMaisUm();
            $vis[0]= new Visualizacao($g[0],$v[2]);
            $vis[1]= new Visualizacao($g[0],$v[1]);
            $vis[2]= new Visualizacao($g[2],$v[1]);
            $vis[3]= new Visualizacao($g[1],$v[1]);
            $vis[1]->avaliarNota(10);
            print_r($v[1]);
            print_r($v[0]);
            print_r($v[2]);
            print_r($g[0]);
            print_r($g[1]);
            print_r($g[2]);
            print_r($vis[0]);
            print_r($vis[1]);
        ?>
    </pre>
    
</body>
</html>