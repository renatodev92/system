<?php 


require_once('conectar.php');//Conectando o php com o banco de dados.
require_once('view.php'); //Verificando se existe uma sessão iniciada   



$id = $_GET['codigo'];
$sql_consult=mysqli_query($mysqlConector , " SELECT *FROM tb_usuarios WHERE id='$id' ");
$result =mysqli_fetch_array($sql_consult);


?>



<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usúario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <center>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-secondary">Fox Crud</h1>
                        <img src="https://img.icons8.com/fluency/48/000000/fox.png" />
                        <hr>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <form method="POST" action="update.php">
                            <h2 class="text-secondary">Editar Usúario</h2>

                            <input type="hidden" id="cod" name="cod" value='<?=$result[0]?>'>
                            
                            <label for="name">Usuário</label><br>
                            <input type="text" id="name" name="name" value='<?=$result[1]?>' required><br>

                            <label for="password">Senha</label><br>
                            <input type="password" id="password" name="password" value='<?=$result[2]?>' required><br>

                            <label for="email">Email</label><br>
                            <input type="email" id="email" name="email" value='<?=$result[3]?>' required><br><br>

                            <select id="nivel" name="nivel">
                                <option value="value='<?=$result[4]?>'">?</option>
                                <option value="front-end">Front-End</option>
                                <option value="back-end">Back-End</option>
                                <option value="full-stack">Full Stack</option>
                                <option value="dba">DBA</option>
                                <option value="student">Estudante</option>
                            </select><br><br>

                            <input type="submit" value="Atualizar" class="btn btn-success"><br><br>

                            <a href="index.html">Login?</a>
                        </form>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
    </center>


</body>

</html>