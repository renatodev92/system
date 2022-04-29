<?php 

session_start(); //Iniciando a sessão.
require_once "conectar.php";//Conectando o php com o banco de dados.

// isset: se o botão btn-logar for clicado e existir, executa o script abaixo.
if(isset($_POST['btn-logar'])):
    $user     = mysqli_escape_string($mysqlConector, $_POST['user']);
    $password = mysqli_escape_string($mysqlConector, $_POST['password']);
    
    //Se as variaveis usuário ou senha estiverem vazias. Se for verdade exiba o erro.
    if(empty($user) or empty($password)):
        echo "<script>
        alert('Os campos login e senha prescisam estar preenchidos!');
        window.location.href='index.html';
        </script>";
        exit();// Caso a condição for válida executa a instrução e deixa de executar o script a frente.
        else:
            $sql    = "SELECT usuario FROM tb_usuarios  WHERE usuario='$user'";
            $result = mysqli_query($mysqlConector, $sql);

                if(mysqli_num_rows($result) > 0):
                        
                   // $password = md5($password);
                    $sql      = "SELECT * FROM tb_usuarios WHERE usuario='$user' and senha='$password'";   
                    $result   = mysqli_query($mysqlConector, $sql);
              
                    if(mysqli_num_rows($result) == 1):
                        $dados = mysqli_fetch_array($result);
                        //mysqli_close($mysqlConector);// Fechando a conexão com o banco de dados após a consulta.
                        $_SESSION['logado']     = true;
                        $_SESSION['usuario']    = $dados['usuario'];
                        $_SESSION['email']      = $dados['email'];
                        $_SESSION['id_usuario'] = $dados['id'];
                        header('Location:main.php');
                        // Caso a condição for válida executa a instrução e deixa de executar o script a frente.
                     else:
                        echo "<script>
                        alert('Usúario e senha não conferem!');
                        window.location.href='index.html';
                        </script>";
                     endif; 
                     exit();  // Caso a condição for válida executa a instrução e deixa de executar o script a frente.
                else:
                    echo "<script>
                    alert('Usúario não cadastrado');
                    window.location.href='index.html';
                    </script>";
                    exit(); // Caso a condição for válida executa a instrução e deixa de executar o script a frente.
                endif;      
        endif;
endif;
?>




