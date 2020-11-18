<!DOCTYPE html>
<html>
    <head>
        <title>{$TITULO}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{$GET_TEMPLATE}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{$GET_TEMPLATE}/tema/contatos/contato.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMPLATE}/tema/js/jquery-3.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMPLATE}/tema/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMPLATE}/tema/contatos/contato.js" type="text/javascript"></script>
        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMPLATE}/tema/css/tema.css" rel="stylesheet" type="text/css"/>
        <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
        <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <!-- começa  o container geral -->
        <div class="container-fluid">

            <!-- começa a div topo -->
            <div class="row" id="topo">

                <div class="container">
                    <div class="col-md-6">
                        <img src="{$GET_TEMPLATE}/images/logo.png" alt=""> 
                    </div>

                    <div class="col-md-6 text-right">
                        <br>
                        {if $LOGADO == true}
                            Olá: {$USER} <a href="{$PAG_LOGOFF}" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i> Sair </a> 
                        {/if}
                    </div>

                </div>    

            </div>

            <div class="row" id="barra-menu">
                <nav class="navbar navbar-inverse">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="nav navbar-nav">
                                <li><a href="{$GET_HOME_ADM}"><i class="glyphicon glyphicon-home"></i> Home </a> </li>
                                <li><a href="{$PAG_CATEGORIAS_ADM}"><i class="glyphicon glyphicon-tag"></i> Categorias</a> </li>
                                <li><a href="{$PAG_PRODUTOS_ADM}"><i class="glyphicon glyphicon-user"></i> Produtos</a> </li>
                                <li><a href="{$PAG_CLIENTES_ADM}"><i class="glyphicon glyphicon-shopping-cart"></i> Clientes </a> </li>
                                <li><a href="{$PAG_PEDIDOS_ADM}" ><i class="glyphicon glyphicon-envelope"></i> Pedidos </a> </li>
                            </ul>
                            <form class="navbar-form navbar-right" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Digite para buscar" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </form>
                        </div>

                    </div> 

                </nav>

            </div> 

            <div class="row" id="conteudo">

                <div class="container"> 

                    <!-- coluna da esquerda -->
                    <div class="col-md-2" id="lateral">

                        <div class="list-group">
                            <span class="list-group-item active"> Categorias</span>
                            {foreach from=$CATEGORIAS item=$Cat}
                                <a href="{$Cat.cat_link}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> {$Cat.cat_nome}</a> 
                            {/foreach}
                            <a href="{$PAG_PRODUTOS}" class="list-group-item"><span class="glyphicon glyphicon-menu-right"></span> Todas Categorias</a> 
                        </div>            

                    </div>

                    <!-- coluna direita CONTEUDO CENTRAL -->
                    <div class="col-md-10">


                        {php}
                        Rotas::get_pagina();
                        {/php}
                    </div>  <!--fim coluna direita-->  
                </div>   
            </div>
            <footer class="row" id="rodape">
                <center><h4>{$TITULO}</h4></center>
            </footer>
        </div> 
    </body>
</html>
