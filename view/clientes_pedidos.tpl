
<section class="row" id="pedidos">


    <h4 class="text-center">Meus Pedidos</h4>
    <center>
        {if $QTD_PEDIDOS >0}
            <table class="table table-bordered" style="width: 90%">

                <tr class="text-danger bg-danger">
                    <td>Data</td>
                    <td>Hora</td>
                    <td>Ref</td>

                    <td>Status</td>
                    <td></td>
                </tr>

                {foreach from=$PEDIDOS item=P}
                    <tr>

                        <td style="width: 10%">{$P.ped_data}</td>
                        <td style="width: 10%">{$P.ped_hora}</td>
                        <td style="width: 10%">{$P.ped_refer}</td>


                        {if $P.ped_pgto_status == 'NAO'} 
                            <td style="width: 15%"><span class="label label-danger">{$P.ped_pgto_status}</span></td>
                            {elseif $P.ped_pgto_status == 'Pago'}
                            <td style="width: 15%"><span class="label label-success">{$P.ped_pgto_status}</span></td>
                            {else}
                            <td style="width: 15%">{$P.ped_pgto_status}</td>
                        {/if}

                    <form name="itens" method="post" action="{$PAG_ITENS}">

                        <input type="hidden" name="ped_cod" id="ped_cod" value="{$P.ped_cod}">
                        <td style="width: 10%"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>

                    </form>    

                    </tr>
                {/foreach}

            </table>
        {else}
            <h4 class="alert alert-info"> Sem pedidos realizados.</h4>
        {/if}
    </center>


</section>