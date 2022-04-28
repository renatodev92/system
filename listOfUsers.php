<?php 
    require_once('conectar.php');//Conectando o php com o banco de dados.
    require_once('view.php'); //Verificando se existe uma sessão iniciada 
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usúarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <center>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
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
                            <h2 class="text-secondary">Lista de usuários</h2>
                            <hr>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Usúario</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nivel</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Excluir</th>
                                </tr>
                                </thead>
                                <tbody>

                                    <?php 
                                    
                                    $sql_consult_users =mysqli_query($mysqlConector, " SELECT * FROM tb_usuarios");
                                    $total =mysqli_num_rows($sql_consult_users);

                                    while($data=mysqli_fetch_array($sql_consult_users)) {
                                    ?>   
                                        <tr>
                                            <td> <?= $data[0] ?></td>
                                            <td> <?= $data[1] ?></td>
                                            <td> <?= $data[3] ?></td>
                                            <td> <?= $data[4] ?></td>
                                            <td><a href="edit.php?codigo=<?= $data[0] ?>">Editar</a></td>
                                            <td><a href="delete.php?codigo=<?= $data[0] ?>">Excluir</a></td>
                                        </tr>
                                        
                                
                                    <?php } ?>

                                    <tr>
                                        <td colspan="6">Total de Usúarios: <?= $total ?></td>
                                    </tr>
                                    </tbody>
                            </table>
                            <hr>
                            <a href="logout.php">Sair</a>
                    </div>
                </div>
            </div>
        </section>
    </center>
    
    
</body>
</html>