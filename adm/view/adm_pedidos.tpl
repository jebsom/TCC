<h4 class="text-center"> Gerenciar Pedidos </h4>
<hr>
<section class="row" id="pesquisa">

    <label> Buscar entre datas</label>
    <form name="buscardata" method="post" action="">
        <div class="col-md-3">            
            <input type="date" name="data_ini" class="form-control" required>
        </div> 
        <div class="col-md-3"> 
            <input type="date" name="data_fim" class="form-control" required>
        </div> 
        <div class="col-md-3"> 
            <button class="btn btn-success"> Buscar </button>
        </div> 
    </form>

</section>
<br>
<section class="row">

    <label> Buscar por Referencia</label>
    <form name="buscarrefcod" method="post" action="">  
        <div class="col-md-3">
            <input type="text" name="txt_ref" class="form-control" required>   
        </div>
        <div class="col-md-3">
            <button class="btn btn-success"> Buscar </button>   
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </form>

</section>
<hr>
<section class="row" id="pedidos">

    <center>
        <table class="table table-bordered " style="width: 90%">
            <tr class="text-success bg-success">
                <td>Cliente</td>
                <td>Data</td>
                <td>Hora</td>
                <td>Ref</td>
                <td>Status</td>
                <td></td>
                <td></td>
            </tr>

            {foreach from=$PEDIDOS item=P}
                <tr>
                    <td >{$P.cli_nome} {$P.cli_sobrenome}</td>
                    <td style="width: 10%">{$P.ped_data}</td>
                    <td style="width: 10%">{$P.ped_hora}</td>
                    <td style="width: 10%">{$P.ped_refer}</td>
                    {if $P.ped_pgto_status == 'NAO'} 
                        <td style="width: 15%"><span class="label label-danger">{$P.ped_pgto_status}</span></td>
                        {else}
                        <td style="width: 15%">{$P.ped_pgto_status}</td>
                    {/if}
                    <td style="width: 10%">
                        <form name="itens" method="post" action="{$PAG_ITENS}">
                            <input type="hidden" name="ped_cod" id="ped_cod" value="{$P.ped_cod}">
                            <button class="btn btn-info"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button>
                        </form> 
                    </td>
                    <td>
                        <form name="deletar" method="post" action="">
                            <input type="hidden" name="ped_cod" id="ped_cod" value="{$P.ped_cod}">
                            <button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="glyphicon glyphicon-remove"></i> </button>
                        </form> 
                    </td>
                </tr>
            {/foreach}
        </table>
    </center>


</section>
<section id="pagincao" class="row">
    <center>
        {$PAGINAS}
    </center>
</section>