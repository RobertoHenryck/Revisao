<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades de PHP, HTML, CSS e Banco de Dados</title>
    <style>
        h1 {
            background-color: red;
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

    <h1>Atividade 1</h1>

    <?php
    // Atividade 1//
    echo 'olá Mundo';
    ?>
    <th></th>




    <h1>Atividade 2</h1>

    <?php

    $_GET['numero1'] = 8;
    $_GET['numero2'] = 12;


    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];


    $soma = $numero1 + $numero2;

    echo "A soma de $numero1 + $numero2 é: $soma";
    ?>


    <h1>Atividade 3</h1>
    <?php

    $numero1 = 2;

    if ($numero1 % 2 == 0) {
        echo 'O número é Par';
    } else {
        echo 'o número é impar';
    }

    ?>




    <h1>Atividade 4</h1>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i . "<br>";
    }
    ?>





    <h1>Atividade 5</h1>
    <?php

    $nomes = ["Roberto", "Rafael", "Giovanna", "Laiz", "Lucas"];


    foreach ($nomes as $nome) {
        echo $nome . "<br>";
    }
    ?>




    <h1>Atividade 6 e 7</h1>

    <?php

    require_once 'C:\Turma2\xampp\htdocs\Revisao\config.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'] ?? '';
        $idade = $_POST['idade'] ?? '';

        if (!empty($nome) && !empty($idade)) {
            $stmt = $pdo->prepare("INSERT INTO alunos (nome, idade) VALUES (:nome, :idade)");
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':idade', $idade);
            $stmt->execute();
        }
    }
    ?>

    <form method="post" action="">
        <label for="nome">Nome do aluno:</label>
        <input type="text" name="nome" id="nome" required>

        <br><br>

        <label for="idade">Idade do aluno:</label>
        <input type="number" name="idade" id="idade" required>

        <br><br>

        <button type="submit">Enviar</button>
    </form>

    <h1>Atividade 8</h1>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Enviar Nome</title>
    </head>

    <body>

        <form method="post" action="bemvindo.php">
            <label for="nome">Digite seu nome:</label>
            <input type="text" id="nome" name="nome" required>
            <button type="submit">Enviar</button>
        </form>

    </body>

    </html>
    













</body>

</html>