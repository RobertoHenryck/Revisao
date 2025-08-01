<?php
if (isset($_POST['nome'])) {
    $nome = htmlspecialchars($_POST['nome']);
} else {
    echo "Nenhum nome foi enviado.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem-vindo!</h1>
    <p><?php echo $nome; ?></p>
    <button> <a href="Atividades.php">Voltar</a></button>
</body>
</html>