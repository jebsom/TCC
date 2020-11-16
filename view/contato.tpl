<div class="container">
    <div class="row">

        <form class="form-horizontal" id="frmcontatoazul" action="envio" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Contato</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cont-nome">Nome</label>  
                    <div class="col-md-8">
                        <input id="cont-nome" name="cont-nome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
                        <span class="help-block">help</span>  
                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cont-email">Email</label>  
                    <div class="col-md-8">
                        <input id="cont-email" name="cont-email" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
                        <span class="help-block">help</span>  
                    </div>
                </div>

                <!-- Text input-->
                {*<div class="form-group">
                <label class="col-md-4 control-label" for="txtinputassunto">Assunto</label>  
                <div class="col-md-8">
                <input id="txtinputassunto" name="txtinputassunto" placeholder="Informe do que se trata" class="form-control input-md" required="required" type="text" />
                <span class="help-block">help</span>  
                </div>
                </div>*}

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="cont-msg">Mensagem</label>
                    <div class="col-md-8">                     
                        <textarea class="form-control" id="cont-msg" rows="6" name="cont-msg" placeholder="Use essa área para entrar em contato conosco ou solicitar um orçamento."></textarea>
                    </div>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="btnenviar"></label>
                    <div class="col-md-8">
                        <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </div>

            </fieldset>
        </form>

    </div>
</div>