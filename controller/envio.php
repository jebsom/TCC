
<?php
$to = Config::EMAIL_HOST;
$subject = 'Contato Loja Virtual JVT';
$message = 'Email de: ' . $_POST['cont-nome'] . ' - ' . $_POST['cont-msg'];
$headers = "From:" . $_POST["cont-email"];
mail($to, $subject, $message, $headers);
?>

<script>alert("Mensagem enviada, logo entraremos em contato! :)")</script>
<meta http-equiv="refresh" content="0; url=contato">