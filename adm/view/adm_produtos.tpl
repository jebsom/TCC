
<h4 class="text-center">Gerenciar Produtos</h4>
<hr>
<section class="row ">

    <div class="col-md-4"> </div>

    <div class="col-md-4"> </div>

    <div class="col-md-4 text-right">
        <a href="{$PRODUTO_ADD}" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> Novo Produto</a>

    </div>

</section>
<br>

{if $PROD_TOTAL < 1}
    <h4 class="alert alert-danger">Ops... Nada foi encontrado </h4>  
{/if}

<section id="produtos" class="row">  

    <table class="table table-bordered">  
        <tr class="bg-success text-success">
            <td></td> 
            <td>Produto</td> 
            <td>Categoria</td> 
            <td>Preço</td> 
            <td>      </td>      
            <td>      </td>      
        </tr>

        {foreach from=$PRODS item=P}
            <tr>
                <td>  <img src="{$P.prod_img_p}" alt="" > </td>
                <td> {$P.prod_nome}</td>
                <td>{$P.cat_nome}</td>
                <td class="text-right">R$ {$P.prod_valor}</td>
                <td>
                    <form name="prodeditar" method="post" action="{$PAG_PRODUTO_EDITAR}">
                        <input type="hidden" name="prod_id" id="prod_id" value="{$P.prod_id}">
                        <button class="btn btn-success"> <i class="glyphicon glyphicon-pencil"></i> </button>
                    </form>  

                </td>

                <td>

                    <form name="prodimg" method="post" action="">
                        <input type="hidden" name="prod_id" id="prod_id" value="{$P.prod_id}">
                        <input type="hidden" name="prod_nome" id="prod_nome" value="{$P.prod_nome}">
                        <button class="btn btn-info"> <i class="glyphicon glyphicon-picture"></i> </button>

                    </form>  

                </td>


            </tr>

        {/foreach}

    </table>

</section>


<!--  paginação inferior   -->  
<section id="pagincao" class="row">
    <center>
        {$PAGINAS}
    </center>
</section>

