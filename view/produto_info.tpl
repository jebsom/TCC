{foreach from= $PRODS item=Prod}
    <h3 class="text-center">{$Prod.prod_nome} - REF: {$Prod.prod_refer}</h3>
    <hr>
    <div class="row">
        {*  div da esquerda imagem do produto  *}
        <div class="col-md-6 ">
            <img class="thumbnail" src="{$Prod.prod_img_g}" alt="" > 
        </div>
        {*    div da direita info produtos    *}
        <div class="col-md-6 thumbnail">
            <img src="{$GET_TEMPLATE}/images/logo-pagseguro.png" alt="">
            <hr>
            <div class="col-md-6">
                <h3 class="text-center preco">R$ {$Prod.prod_valor}</h3>   

            </div>
            <div class="col-md-6">
                <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                    <input type="hidden" name="prod_id" value="{$Prod.prod_id}">
                    <input type="hidden" name="acao" value="add">
                    <button  class="btn btn-success btn-lg">Comprar</button>
                </form> 
            </div>
        </div>
    </div>
    <!-- -->
    {*  listagem de imagens extras  *}
    <div class="row">
        <hr>
        <h4 class="text-center">Mais imagens</h4>
        <ul style="list-style: none">
            {foreach from=$IMAGES item=Img}
                <li class="col-md-3 ">
                    <img src="{$Img.img_nome}" alt="" class="thumbnail">
                </li>
            {/foreach}
        </ul>
    </div>
    {*    <!-- descrição do produto-->  *}
    <div class="row">
        <hr>
        <h4 class="text-center">Descrição do produto</h4>
        {$Prod.prod_descricao} 
    </div>  
{/foreach}