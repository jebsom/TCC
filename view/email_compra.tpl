<style>
    .tabela {
        border-collapse: collapse;
        width: 100%;
    }

    .tabela th, td {
        text-align: left;
        padding: 8px;
    }

    .tabela tr:nth-child(odd){
        background-color: #b2b2b2;
    }

    .sessao{
        padding:20px;
    }


    .total{
        text-align:right;
    }

    .frete{
        text-align:right;
    }

    .totalfrete{
        text-align:right;
        font-size:18px;
        font-style: bold;
        color:#062a46;
    }

    .textoinicio{
        text-align:center;
    }

    .minhaconta{
        text-align:center;
    }
</style>

<p class="textoinicio"> Olá {$NOME_CLIENTE}, obrigado pela sua compra em {$SITE_NOME} <br>
    <a href="{$SITE_HOME}"> {$SITE_HOME} </a>
</p>


<section class="row">

    <p class="minhaconta">
        Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta <a  href="{$PAG_CONTA}" > Minha conta: {$PAG_CONTA} </a>
    </p>                 

</section>


<section class="row ">

    <center>
        <table class="tabela" style="width: 95%;">
            <tr style="border: 1px solid #b2dba1; background-color: #072339; color:#FFF;font-size:18px;" >
                <td colspan="5">Itens do seu pedido </td>
            </tr>
            {foreach from=$PRODS item=P}
                <tr style="border: 1px solid #b2dba1">
                    <td> <img src="{$P.prod_img}" alt=" {$P.prod_nome} "> </td> 
                    <td>  {$P.prod_nome}  </td>
                    <td>  {$P.prod_valor} </td>
                    <td>  {$P.prod_qtd}   </td>
                    <td>  {$P.prod_subTotal} </td>
                </tr>
            {/foreach}
        </table>
    </center>

</section>


<div class="sessao">

    <p class="total">
        <b>Total :</b> R$ {$V_TOTAL}
    </p>
    <p class="frete">
        <b>Frete</b> : R$ {$FRETE}
    </p>
    <p class="totalfrete">
        <b>Final : R$ {$TOTAL_COM_FRETE}</b>
    </p>

</div>