<h4 class="text-center"> Gerenciar categorias </h4>
<hr>

<section class="row">

    <form name="categoriainsere" method="post" action="">
        <div class="col-md-4">
            <input type="text" name="cat_nome" class="form-control" required>  
        </div>
        <div class="col-md-4">
            <button class="btn btn-success" name="cat_nova" value="cat_nova"> Inserir nova categoria</button>
        </div>
        <div class="col-md-4"></div>
    </form>

</section>
<hr>

<section class="row" id="listarcategorias">

    <center>
        <table class="table table-bordered" style="width: 90%">
            {foreach from=$CATEGORIAS item=C}
                <form name="categorias_editar" method="post" action="">
                    <tr>
                        <td style="width: 70%">
                            <input type="text" name="cat_nome" value="{$C.cat_nome}" class="form-control" required> 
                            <input type="hidden" name="cat_id" value="{$C.cat_id}">
                        </td>
                        <td>
                            <button class="btn btn-success" name="cat_editar" value="cat_editar">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger" name="cat_apagar" value="cat_apagar">Apagar</button>
                        </td>
                    </tr>        
                </form>
            {/foreach}
        </table>
    </center>

</section>

