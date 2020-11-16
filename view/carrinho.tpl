
<hr>
<!-- botoes e opções de cima -->
<section class="row">

    <div class="col-md-4 ">
    </div>
    <div class="col-md-4">

    </div>
    <div class="col-md-4 text-right">
        <a href="{$PAG_PRODUTOS}" class="btn btn-info" title="">Comprar Mais</a>
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
                <td></td> 

            </tr>

            {foreach from=$PRODS item=$p}
                <tr>

                    <td> <img src="{$p.prod_img}" alt="{$p.prod_nome}"> </td>
                    <td> {$p.prod_nome} </td>
                    <td> {$p.prod_valor} </td>
                    <td> {$p.prod_qtd} </td>
                    <td> {$p.prod_subTotal} </td>
                    <td> 
                        <form name="del" method="post" action="{$PAG_CARRINHO_ALT}">

                            <input type="hidden" name="prod_id" value="{$p.prod_id}">    
                            <input type="hidden" name="acao" value="del">    

                            <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                        </form>
                    </td>


                </tr>
            {/foreach}


        </table>

    </center>


</section><!-- fim da listagem itens -->




<hr>

<!-- botoes de baixo e valor total -->
<section class="row" id="total">

    <div class="col-md-4 text-right">

    </div>

    <div class="col-md-4 text-right text-danger bg-warning">
        <h4>
            Total : R$ {$V_TOTAL}
        </h4>
    </div>

    <!-- botão de limpar-->
    <div class="col-md-4 ">

        <form name="limpar" method="post" id ="limpar" action="{$PAG_CARRINHO_ALT}">
            <input type="hidden" name="acao" value="limpar">
            <input type="hidden" name="prod_id" value="1">

            <button class="btn btn-danger btn-block"> <i class="glyphicon glyphicon-trash"></i> Limpar Tudo</button>

        </form>
        <br>
        <form name="pedido_confirmar"  id="pedido_confirmar" method="post" action="{$PAG_CONFIRMAR}">
            <button class="btn btn-success btn-block btn-md" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
            <span id="frete" class="btn-block"></span>
        </form>
    </div>
</section>

<hr>

<section class="row" id="dadosfrete">

    <div class="col-md-4"></div>

    <div class="col-md-4">

        <!-- campos para tratar  do  frete -->
        <input type="hidden" name="peso_frete" id="peso_frete" value="{$PESO}" class="form-control " readonly>

        <input type="text" name="cep_frete" class="form-control" id="cep_frete" value="" placeholder="digite seu cep" >

        <input type="hidden" name="frete_valor" id="frete_valor" value="0">

    </div> 

    <div class="col-md-4">
        <!-- botão frete -->
        <button class="btn btn-warning btn-block" id="buscar_frete"> <i class="glyphicon glyphicon-send"></i> Calcular Frete </button>

    </div>


</section>

<hr>

<br>

<!-- botão finalzar -->

<script>
    $(document).ready(function () {

        // validar frete
        $('#buscar_frete').click(function () {

            var CEP_CLIENTE = $('#cep_frete').val();
            var PESO_FRETE = $('#peso_frete').val();

            if (CEP_CLIENTE.length !== 8) {
                alert('Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto');
                $('#frete').addClass(' text-center text-danger');
                $('#frete').html('<b>Digite seu CEP corretamente, 8 dígitos e sem traço ou ponto</b>');
                $('#cep_frete').focus();
            } else {


                $('#frete').html('<img src="view/images/loader.gif"> <b>Carregando...</b>');
                $('#frete').addClass(' text-center text-danger');

                // carrego o combo com os bairros

                $('#frete').load('controller/frete.php?cepcliente=' + CEP_CLIENTE + '&pesofrete=' + PESO_FRETE);

            } // fim do IF digitei o CEP


        }); // fim do change


    }); // fim do ready

</script>
