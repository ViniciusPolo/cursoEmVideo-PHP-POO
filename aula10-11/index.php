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
    require_once "Pessoa.php";
    require_once "Funcionario.php";
    require_once "Aluno.php";
    require_once "Professor.php";
    require_once "Bolsista.php";
    
    //$p1 = new Pessoa("Drac", 50, 'M'); classe abstrata não pode ser instanciada
    $p2 = new Professor('Java', 8500);
    $p3 = new Aluno(14400, 'DSM');
    $p4 = new Funcionario('Secretaria', true);
    $p5 = new Bolsista('integral');

    $p2->setNome('Mavy');
    $p3->setNome('Frank');
    $p4->setNome('Jhonny');

    $p2->setSexo('F');
    $p3->setSexo('M');
    $p4->setSexo('M');

    $p2->setIdade(25);
    $p3->setIdade(45);
    $p4->setIdade(27);

    $p4->setSetor('diretoria');
    $p2->receberAumento(350);
    $p2->fazerAniver();
    $p5->setNome('Walter');
    $p5->setSexo('NB');
    $p5->setCurso('ADS');
    $p5->setIdade(34);
    
    //print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);
    print_r($p5);

    $p5->fazerAniver();
    $p3->pagarMensalidade();
    $p5->pagarMensalidade();
    print_r($p5);
    
    ?>
    </pre>
</body>
</html>