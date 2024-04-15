<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    // Acessa
    include_once('../config/config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conexao->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['password'])) {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
        } else {
            $_SESSION['error_message'] = "Usuário ou senha incorreto.";
            header('Location: ../index.php');
        }
    } else {
        $_SESSION['error_message'] = "Usuário ou senha incorreto.";
        header('Location: ../index.php');
    }
} else {
    // Não acessa
    header('Location: ../index.php');
}
?>
