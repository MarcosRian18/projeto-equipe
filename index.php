<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css"/>
    <title>login</title>
</head>
<body>
   <nav class="navbar navbar-dark bg-dark">
       <a class="navbar-brand" href="#">
           <!-- talvez uma imagem aqui-->
           ESTACIONAMENTO - PARE AQUI E FIQUE SEGURO!!
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
                        <form action="validaLogin.php" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail">
                            </div>
                            <div>
                                <input name="senha" type="password" class="form-control" placeholder="Senha" >
                            </div>
                            <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                                <div class="text-danger">
                                    Usuário ou senha inválido(s)
                                </div>
                            <? } ?>
                            <button class="btn btn-lg btn-info btn-block" type="submit">
                                Entrar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
       </div>

   </div>

    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>