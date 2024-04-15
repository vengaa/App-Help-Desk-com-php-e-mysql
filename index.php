<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
    </nav>

    <div class="container">    
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="sistema/valida_login.php" method="POST">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>
                            <button name="submit" class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                            

                            <?php 
                              session_start();
                               if (isset($_SESSION['error_message'])) {
                                echo '<br>';
                                echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error_message'] . '</div>';
                                unset($_SESSION['error_message']);
                               }
                            ?>
                            <br>
                            <p>Usuário de homologação:</p>
                            <p>User: teste@teste.com <br>Senha: teste</p> <br><br>
                            <strong>Admin com acesso a todos os casos</strong><br><br>
                            <p>user: teste@vengadev.com <br>Senha: teste</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
