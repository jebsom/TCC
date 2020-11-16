
<hr>
{if $PROD_TOTAL <1}
    <h4 class="alert alert-danger"> Nenhum produto encontrado!!</h4>
{/if}
<!--  começa lista de produtos  ---->   
<section id="produtos" class="row">  

    <ul style="list-style: none" >
        <div class="row" id="pularliha">
            {foreach from= $PRODS item=Prod}
                <li class="col-md-4">
                    <div class="thumbnail">
                        <a href="{$PROD_INFO}/{$Prod.prod_id}/{$Prod.prod_slug}">
                            <img src="{$Prod.prod_img}" alt="" > 
                            <div class="caption">
                                <h4 class="text-center"> {$Prod.prod_nome}</h4> 
                                <h3 class="text-center text-danger">R$ {$Prod.prod_valor}</h3>
                            </div>
                        </a>
                    </div>
                </li>
            {/foreach}
        </div>
    </ul>

</section>


<!--  paginação inferior   -->  
<section id="pagincao" class="row">
    <center>
        {$PAGINAS}
    </center>
</section>