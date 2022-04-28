<?php 

require_once('conectar.php');//Conectando o php com o banco de dados.
require_once('view.php'); //Verificando se existe uma sessão iniciada 

// isset = (se o botão de login for clicado e existir, execute as instruções abaixo.)
if(isset($_POST['btn-logar'])):
    $user     = mysqli_escape_string($mysqlConector, $_POST['user']);
    $password = mysqli_escape_string($mysqlConector, $_POST['password']);

        if(empty($user) or empty($password)):
            echo "<script>
            alert('Os campos login e senha prescisam estar preenchidos!');
            window.location.href='index.html';
            </script>";
        else:

            $sql    = "SELECT usuario FROM tb_usuarios  WHERE usuario='$user'";
            $result = mysqli_query($mysqlConector, $sql);

                if(mysqli_num_rows($result) > 0):
                        
                   // $password = md5($password);
                    $sql      = "SELECT * FROM tb_usuarios WHERE usuario='$user' and senha='$password'";   
                    $result   = mysqli_query($mysqlConector, $sql);
              
                    if(mysqli_num_rows($result) == 1):
                        $dados = mysqli_fetch_array($result);
                        mysqli_close($mysqlConector);// Fechando a conexão com o banco de dados após a consulta.
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];
                         header('Location: main.php');
                     else:
                        echo "<script>
                        alert('Usúario e senha não conferem!');
                        window.location.href='index.html';
                        </script>";
                     endif;   
                else:
                    echo "<script>
                    alert('Usúario não cadastrado');
                    window.location.href='index.html';
                    </script>"; 
                endif;      
     endif;
endif;
?>




