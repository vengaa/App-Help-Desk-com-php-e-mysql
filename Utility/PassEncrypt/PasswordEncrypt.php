<?php 

    $senha = "teste";

    // PASSWORD HASH RECOMENDADO

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    echo "<strong><p>Senha com Hash:</strong> $senha_hash";

    // MD5 - codificada 

    $senha_md5 = md5($senha);
    echo "<strong><p>Senha com MD5:</strong> $senha_md5";

    print_r($senha);
?>