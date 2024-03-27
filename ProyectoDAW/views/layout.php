<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRADE2Shop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="webroot/css/style.css">
    <style>
        header {
            background-color: rgb(167, 100, 167);
        }

        a{
            text-decoration: none;
        }

        footer {
            height: 60px;
        }
    </style>
</head>

<body>
    <header class="d-flex flex-row">

        <div class="logo p-4 col-2 mx-auto d-flex align-items-center">
            <form action="" method="post">
                <button href="" class="nav-link" name="Home_Logo">
                    <img class="img-fluid" src="" alt="">
                    <h1 style="display: flex; justify-content: center; text-align: center; color: white;">TRADE2<i>Shop</i></h1>
                </button>
            </form>
        </div>

        <nav class="menuPrin col-5 navbar navbar-expand-lg mx-auto d-flex align-items-center"
            aria-label="Fourth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarWithDropdown" aria-controls="navbarWithDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarWithDropdown">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item btn-primary">
                            <a class="nav-link p-4 text-white" href="#">HOME</a>
                        </li>
                        <li class="nav-item dropdown btn-primary">
                            <a class="nav-link dropdown-toggle p-4 text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                EL TIEMPO
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown btn-primary">
                            <a class="nav-link dropdown-toggle p-4 text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICIOS CLIMÁTICOS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown btn-primary">
                            <a class="nav-link dropdown-toggle p-4 text-white" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CONÓCENOS
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="menuLogin col-2 navbar-expand-lg align-items-center d-flex">
            <div class="container-fluid">
                <div class="collapse navbar-collapse show" id="navbarWithDropdown">
                    <form action="" method="post" class="navbar-nav align-items-center">
                        <?php
                            if (!isset($_SESSION['usuario']))
                            {
                                echo '<li class="nav-item m-2">
                                        <button class="btn btn-light" href="#" name="Home_Login">Inicia Sesión</button>
                                    </li>
                                    |
                                    <li class="nav-item m-2">
                                        <button class="btn btn-success" href="#" name="Home_Registro">Regístrate</button>
                                    </li>';
                            } else {
                                echo '<li class="nav-item m-2">
                                        <button class="btn btn-light" href="#" name="Home_Perfil">Mi Perfil</button>
                                    </li>
                                    |
                                    <li class="nav-item m-2">
                                        <button class="btn btn-dark" href="#" name="Home_Logout">Cerrar Sesión</button>
                                    </li>';
                            }
                        ?>
                        
                        <!-- <li class="nav-item m-2">
                            <button class="btn btn-light" href="#" name="Home_Login">Inicia Sesión</a>
                        </li>
                        |
                        <li class="nav-item m-2">
                            <button class="btn btn-success" href="#" name="Home_Registro">Regístrate</a>
                        </li>
                        <li class="nav-item m-2">
                            <button class="btn btn-dark" href="#" name="Home_Logout">Cerrar Sesión</a>
                        </li> -->
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <?php
        if (!isset ($_SESSION['vista'])) {
            require VIEW . 'home.php';
        } else {
            require $_SESSION['vista'];
        }
        ?>
    </main>

    <footer class="bg-primary pt-1">
        <div class="powered row justify-content-end text-white mt-3 me-2">
            @ Powered by TRADE2Shop
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>