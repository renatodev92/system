<?php 
//Acicionando uma sessão
session_start();

// !isset =(se não existir) Se o usúario não estiver logado e tentarem acessar a home pela URL, irá redirecionar o úsuario para index.html.
if(!isset($_SESSION['logado'])):
    header('Location: index.html');
endif;


?>