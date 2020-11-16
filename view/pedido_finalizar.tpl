<h3>Finalizar Pedido</h3>
<hr>

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
        <div class="alert alert-success">Pedido finalizado com sucesso!</div>

    </center>

</section>

<section class="row" id="total">

    <div class="col-md-12 text-right text-danger bg-warning" align="right">
        <h4>
            Total : R$ {$V_TOTAL}
        </h4>
        <hr><h4>
            Frete: R$ {$FRETE}
        </h4>
        <hr><h4>
            Total com Frete : R$ {$TOTAL_COM_FRETE}
        </h4>
        <hr>
    </div>

</section>

<section class="row">
    <h3 class="text-center"> Formas de pagamento </h3>     

    <div class="col-md-4">
    </div>
    <!-- botao de pagamento  -->
    <div class="col-md-4">

        <img src="{$GET_TEMPLATE}/images/logo-pagseguro.png"  alt=""> 
        <script type="text/javascript" src="{$PS_SCRIPT}"></script>

    </div>
    <div class="col-md-4">

    </div>
</section>
<br>
<br>