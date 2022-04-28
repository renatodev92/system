<?php 

include_once('conectar.php'); //Conectando o php com o banco de dados.
require_once('view.php'); //Verificando se existe uma sessão iniciada  

$id = $_GET['codigo'];
$sql_delete =mysqli_query($mysqlConector, "DELETE FROM tb_usuarios WHERE id='$id' ");

if($sql_delete==true) {

    echo "<script>

        alert('Usuario deletado com sucesso!');
        window.location.href='listOfUsers.php';
    </script>";
} 
else {
    echo "<script>

    alert('Falha ao deletar o usúario.');
    window.location.href='listOfUsers.php';

</script>";
}

?>