<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>E-Commerce</h1>
    <?php
    session_start();
    if (isset($_SESSION['email'])) {
        echo "<p>Bem-vindo, " . $_SESSION['email'] . "!</p>";
        echo '<form action="autenticacao.php" method="post">
                <input type="submit" name="sair" value="Sair">
              </form>';
    } else {
        echo '<p>Deslogado!</p>
              <form action="autenticacao.php" method="post">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
                <br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
                <br>
                <input type="submit" name="entrar" value="Entrar">
              </form>';
    }
    ?>
</body>
</html>
