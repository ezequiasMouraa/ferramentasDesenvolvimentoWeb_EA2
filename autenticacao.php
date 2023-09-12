<?php
session_start(); // Iniciar a sessão

if (isset($_POST['entrar'])) {
    // Processar o formulário de entrada
    $email = $_POST['email'];
    $_SESSION['email'] = $email; // Salvar o e-mail na sessão
    header("Location: index.php"); // Redirecionar para a página inicial
    exit;
} elseif (isset($_POST['sair'])) {
    // Finalizar a sessão
    session_unset();
    session_destroy();
    header("Location: index.php"); // Redirecionar para a página inicial
    exit;
}
?>
