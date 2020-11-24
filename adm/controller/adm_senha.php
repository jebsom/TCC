<?php

$smarty = new Template();

if (isset($_POST['adm_senha_atual']) && isset($_POST['adm_senha'])) {
    $senhaAtual = md5($_POST['adm_senha_atual']);
    $senhaNova = $_POST['adm_senha'];
    $email = $_SESSION['ADM']['user_email'];
    if ($senhaAtual != $_SESSION['ADM']['user_pwd']) {
        echo '<h3 class="alert alert-danger" id="erro_mostrar">Senha atual está incorreta. Redirecionando...</h3>';
        Rotas::redirecionar(3, Sistema::VoltarPagina());
        exit();
    }
    $user = new Usuario();
    if ($user->alterarSenha($senhaNova, $email)) {

        $enviar = new EnviarEmail();

        $assunto = 'Alteração da senha ADM no site ' . Sistema::DataAtualBR();
        $destinatarios = array($email, Config::SITE_EMAIL_ADM);
        $msg = '<h3> Foi feito alteração de senha ADM no site neste momento, nova senha:  ' . $senhaNova . '</h3>';

        $enviar->Enviar($assunto, $msg, $destinatarios);
        echo '<div class="alert alert-success"> Senha alterada com sucesso! Já pode fazer login com sua nova senha </div>';
        Rotas::Redirecionar(2, Rotas::pag_logoff_adm());
    } else {
        echo '<div class="alert alert-danger"> Erro ao tentar alterar a senha  </div>';
    }
} else {

    $smarty->display('adm_senha.tpl');
}
