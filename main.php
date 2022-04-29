<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php 
        require_once 'conectar.php';//Incluindo a conexão com o banco de dados com o require_once.
        require_once  'view.php'; //Verificando se existe uma sessão iniciada 
    ?>

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
                        <h2 class="text-secondary">Bem-vindo(a) ao nosso sistema!</h2><br>

                        <div>
                            <h6 style="text-transform: uppercase; color:gray;">Usuário:
                                    <?php 
                                        echo $_SESSION['usuario'];
                                    ?>
                                </h6>
                                <h6 style="color:gray;">EMAIL:
                                    <?php 
                                        echo $_SESSION['email'];
                                    ?>
                            </h6><br>
                            <ul class="list-unstyled">
                                <li><a href="listOfUsers.php">Usúarios cadastrados</a></li>
                                <li><a href="logout.php">Sair</a></li>
                            </ul>
                        </div>
                    </div> 
                </div> 
            </div>
        </section>              
    </center>
    
</body>
</html>