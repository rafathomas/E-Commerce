<?php
$to      = Config::EMAIL_USER;
$subject = 'Loja Virtual';
$message = $_GET['txtinputarea'];
$dest = $_GET['txtinputemail'];
$headers = "From:" .$dest;
    
mail($to, $subject, $message, $headers);
?>

<script> alert('Email enviado com sucesso!') </script>
<meta http-equiv="refresh" content="0; url=contato">