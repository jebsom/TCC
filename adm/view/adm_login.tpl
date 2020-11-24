<!DOCTYPE html>

<html>
    <head>
        <title>Area restrita </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="{$GET_TEMPLATE}/tema/js/jquery-3.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMPLATE}/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="{$GET_TEMPLATE}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMPLATE}/tema/css/tema.css" rel="stylesheet" type="text/css"/>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-color: #245269">

        <section class="container" >

            <section class="row">

                <div class="col-md-4"></div>    
                <div class="col-md-4 thumbnail" id="bloco_login_adm">
                    <h4 class="text-center"> Área restrita </h4>
                    <form name="login" method="post" action="">
                        <label>Email:</label>
                        <input type="email" name="txt_email" class="form-control" required autocomplete="off">
                        <label>Senha:</label>
                        <input type="password" name="txt_senha" class="form-control" required>
                        <br>
                        <br>
                        <button class="btn btn-info btn-block btn-lg" name="txt_logar" value="txt_logar"> Entrar </button>
                        <br>
                    </form>

                    <br>
                    <center><button class="btn btn-warning" data-toggle="collapse" data-target="#recovery"> Esqueci a senha </button></center>

                    <div class="alert alert-danger collapse" id="recovery">
                        <form name="recovery" method="post" action="">
                            <label>Digite o email do administrador </label>
                            <input type="email" name="txt_email" class="form-control" required>
                            <button class="btn btn-success" name="recovery" value="recovery">Solicitar senha</button>
                        </form> 
                    </div>
                </div>    
                <div class="col-md-4"></div>    

            </section>

        </section>

    </body>
</html>