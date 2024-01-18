<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="webroot/css/style.css">
    <style>
        header{
            background-color: rgb(167, 167, 167);
        }

        .error{
            color: red;
        }
    </style>
</head>
<body>
    <header class="d-flex">
        <div>
            <form action="" method="post">
                    <input type="submit" value="Home" name="home">
            </form>
        </div>
        <h1 style="display: flex; justify-content: center; text-align: center;">Página Web de Miguel</h1>
        <nav>
            <div>
                <?php
                    if(validado()){
                        echo "Bienvenido ".$_SESSION['usuario']->descUsuario;
                ?>
                <form action="" method="post">
                    <input type="submit" value="Ver Citas" name="Citas_verCitas">
                    <input type="submit" value="Ver Perfil" name="User_verPerfil">
                    <input type="submit" value="Cerrar Sesión" name="logout">
                </form>
                <?php
                    }else{
                ?>
                <form action="" method="post">
                    <input type="submit" value="Login" name="login">
                </form>
                <?php
                    }
                ?>
            </div>
        </nav>
    </header>
    <main>
        <?php
            if(!isset($_SESSION['vista'])){
                require VIEW.'home.php';
            } else {
                require $_SESSION['vista'];
            }
        ?>
    </main>
    <footer>
        Copyright
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>