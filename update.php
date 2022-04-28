<?php 

require_once('conectar.php');//Fazendo uma porta de ligacao do nosso sistema com o banco de dados.
require_once('view.php'); //Verificando se existe uma sessão iniciada 

$id       = $_POST['cod'];
$user     = $_POST['name'];
$password = $_POST['password'];
$email    = $_POST['email'];
$nivel    = $_POST['nivel'];

$sql_update = mysqli_query( $mysqlConector , " UPDATE tb_usuarios SET usuario='$user', senha='$password', email='$email', nivel='$nivel' WHERE id='$id' ");

if($sql_update==true) {

    echo " <script>

        alert('Informações atualizadas com sucesso\\n ID: $id\\n USUÁRIO: $user\\n EMAIL: $email \\n NÍVEL: $nivel');
        window.location.href='listOfUsers.php';
    </script> ";
} 

else {
    echo "<script>

    alert('Falha ao atualizar os dados do usúario!');
    window.location.href='listOfUsers.php';

</script>";
}


?>