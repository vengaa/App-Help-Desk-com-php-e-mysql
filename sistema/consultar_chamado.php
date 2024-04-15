<?php
    require_once "validar_acesso.php";

    include_once('../config/config.php');

    // Supondo que o e-mail do usuário esteja armazenado na sessão
    $email_usuario = $_SESSION['email'];

    // Consulta SQL para verificar se o usuário tem permissão de acesso
    $query_op = "SELECT op FROM users WHERE email = '$email_usuario'";
    $resultado_op = mysqli_query($conexao, $query_op);

    if ($resultado_op) {
        $usuario = mysqli_fetch_assoc($resultado_op);
        if ($usuario['op'] == 1) {
            // Se op = 1, lista todos os chamados
            $query = "SELECT * FROM called";
            $resultado = mysqli_query($conexao, $query);
        } else {
            // Se op = 0, lista apenas os chamados do usuário atual
            $query = "SELECT * FROM called WHERE requester = '$email_usuario'";
            $resultado = mysqli_query($conexao, $query);
        }
    } else {
        echo "Erro ao consultar permissões do usuário.";
    }
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <a href="logout.php" class="btn btn-danger">Sair</a>
      
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php
                // Loop para exibir os chamados
                while($chamado = mysqli_fetch_assoc($resultado)) {
              ?>
                  <div class="card mb-3 bg-light">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $chamado['title']; ?></h5>
                      <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado['category']; ?></h6>
                      <p class="card-text"><?php echo $chamado['description']; ?></p>
                      
                      <!-- Botões de Editar e Apagar lado a lado -->
                      <div>
                        <a href="#" class="btn btn-warning btn-sm d-inline-block">Editar</a>
                        <a href="#" class="btn btn-danger btn-sm d-inline-block">Apagar</a>
                        <a href="#" class="btn btn-primary btn-sm d-inline-privar">Resolver</a>
                      </div>
                    </div>
                  </div>
              <?php
                }
              ?>
              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
