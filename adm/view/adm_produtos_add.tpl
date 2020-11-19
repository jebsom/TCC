<h4 class="text-center"> Adicionar novo produto </h4>
<hr>

<section class="row" id="camposproduto">

    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">

        <div class="col-md-6">
            <label>Produto</label>
            <input type="text" name="prod_nome" id="prod_nome" class="form-control"  required >
        </div>

        <div class="col-md-4">
            <label>Catogoria</label>
            <select name="prod_categoria" id="prod_categoria" class="form-control" required>
                <option value="teste"> Escolha </option>                           
                {foreach from=$CATEGORIAS item=C}                    
                    <option value="{$C.cat_id}">{$C.cat_nome}</option>                                        
                {/foreach}                
            </select>
        </div>

        <div class="col-md-2">
            <label>Ativo</label>
            <select name="prod_ativo" id="prod_ativo" class="form-control" required>
                <option value=""> Escolha </option>
                <option value="NAO"> Não </option>
                <option value="SIM"> Sim </option>
            </select>
        </div>

        <div class="col-md-3">
            <label>Modelo</label>
            <input type="text" name="prod_modelo" id="prod_modelo" class="form-control"  >
        </div>

        <div class="col-md-2">
            <label>Referência</label>
            <input type="text" name="prod_refer" id="prod_refer" class="form-control"  >
        </div>

        <div class="col-md-2">
            <label>Valor</label>
            <input type="text" name="prod_valor" id="prod_valor" class="form-control" required >
        </div>

        <div class="col-md-2">
            <label>Estoque</label>
            <input type="text" name="prod_estoque" id="prod_estoque" class="form-control" required >
        </div>

        <div class="col-md-2">
            <label>Peso</label>
            <input type="text" name="prod_peso" id="prod_peso" class="form-control" required >
        </div>

        {*        <div class="col-md-2">
        <label>Altura</label>
        <input type="text" name="pro_altura" id="pro_altura" class="form-control" required >
        </div>

        <div class="col-md-2">
        <label>Largura</label>
        <input type="text" name="pro_largura" id="pro_largura" class="form-control" required >
        </div>

        <div class="col-md-2">
        <label>Comprimento</label>
        <input type="text" name="pro_comprimento" id="pro_comprimento" class="form-control" required >
        </div>
        *}

        <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <hr>
                <label>Imagem Principal</label>
                <input type="file" name="prod_img" class="form-control " id="prod_img">
            </div>
            <div class="col-md-3"></div>
        </div>

        <div class="col-md-12">
            <label>Descrição</label>
            <textarea name="prod_descricao" id="prod_descricao" rows="5" class="form-control" ></textarea>
            <script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>
            <script type="text/javascript">
                tinymce.init({
                    selector: "textarea"
                });
            </script>
        </div>

        <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="prod_slug" id="prod_slug"   class="form-control" >
        </div>

        <div class="col-md-4"></div>

        <div class="col-md-4">
            <br>
            <button class="btn btn-success btn-block btn-lg" name="btn_gravar"> Gravar </button>
        </div>

        <div class="col-md-4"></div>

    </form>

</section>
<br>
<br>
<br>
<br>




