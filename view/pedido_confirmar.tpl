<h3>Confirmar Pedido</h3>
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-right">
        <a href="{$PAG_CARRINHO}" class="btn btn-info" title="">Voltar para Carrinho</a>
    </div>

</section>
<br>

<!--  table listagem de itens -->
<section class="row ">

    <center>
        <table class="table table-bordered table-striped" style="width: 95%">

            <tr class="text-danger bg-danger">
                <td></td> 
                <td>Produto</td> 
                <td>Valor R$</td> 
                <td>X</td> 
                <td>Sub Total R$</td> 


            </tr>

            {foreach from=$PRODS item=$p}
                <tr>

                    <td> <img src="{$p.prod_img}" alt="{$p.prod_nome}"> </td>
                    <td> {$p.prod_nome} </td>
                    <td> {$p.prod_valor} </td>
                    <td> {$p.prod_qtd} </td>
                    <td> {$p.prod_subTotal} </td>

                </tr>
            {/foreach}

        </table>

    </center>

</section>

<section class="row" id="total">

    <div class="col-md-4 text-right">
    </div>

    <div class="col-md-4 text-right text-danger bg-warning">
        <h4>
            Total : R$ {$V_TOTAL}
        </h4>
        <hr>
        <h4>
            Frete : R$ {$FRETE}
        </h4>
        <hr>
        <h4>
            Total com Frete : R$ {$TOTAL_COM_FRETE}
        </h4>
    </div>

    <div class="col-md-4 ">
        <form name="finalizar" id="finalizar"  method="post" action="{$PAG_PEDIDO_FINALIZAR}">
            <button class="btn btn-success btn-block btn-md" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Finalizar Compra</button>
        </form>
    </div>
</section>