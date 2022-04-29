<?php 

require_once('conectar.php');//Conectando o php com o banco de dados.

$user = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];

$sql_register = mysqli_query($mysqlConector , " INSERT INTO tb_usuarios(usuario, senha, email, nivel) VALUES ('$user','$password','$email','$nivel') " );

if($sql_register == true) {

    echo "<script>
        alert('Usúario cadastrado com sucesso! ');
        window.location.href='index.html';
    </script> ";
} 

else {
    echo "<script>
        alert('Falha ao cadastrar usúario!');
        window.location.href='register.html';
    </script>";
}
