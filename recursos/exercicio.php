<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Geo:400,400i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/exercicio.css">
    <title>PHP - Exercicio</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>PHP - Dashboard documentation</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "teste/teste.php" ?>
            class="verde">Sem formatação</a>
        <a href="/index.php" class="vermelha"> Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php 
               include("teste/teste.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        Duzão sulution © todos os direitos reservados. <?= date('Y'); ?> <h4>❤</h4>
    </footer>
</body>
</html>