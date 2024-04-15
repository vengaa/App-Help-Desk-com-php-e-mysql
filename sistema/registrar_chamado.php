<?php
session_start();
if(isset($_POST['submit'])) {
    include_once('../config/config.php');

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $requester = $_SESSION['email'];

    // Definindo manualmente o status como "open"
    $status = "open";

    // Adicionando aspas simples ao redor de $requester
    $result = mysqli_query($conexao, "INSERT INTO called (title, category, description, status, requester) 
    VALUES ('$title', '$category', '$description', '$status', '$requester')");

    if ($result) {
        header('Location: home.php');
    } else {
        echo "Erro ao registrar chamado: " . mysqli_error($conexao);
    }
}
?>
