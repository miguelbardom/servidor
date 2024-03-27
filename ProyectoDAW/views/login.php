<!-- <form action="" method="post">
    <input type="submit" value="Registro" name="Login_Registro">
</form> -->

<div class="container mt-5 mb-4">
    <div class="row gx-8">
        <div class="col-6 offset-3 mb-4">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row mt-3 ms-1">
                        <div class="">
                            <h3 class="black justify-content text-center">Iniciar Sesión</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">

                    <form action="" method="post" class="text-center">

                        <!-- <label for="email">Usuario: -->
                        <input type="text" name="user" id="user" class="form-control" placeholder="Usuario">
                        <!-- </label> -->
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'user');
                            ?>
                        </p>

                        <!-- <label for="pass">Contraseña: -->
                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña">
                        <!-- </label> -->
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'pass');
                            ?>
                        </p>

                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'validado');
                            ?>
                        </p>

                        <!-- <div class="row mt-3 mx-2">
                            <div class="col-6">
                                <input class="form-check-input" type="checkbox" name="" id="recordar">
                                <label class="form-check-label" for="recordar">Recordar contraseña</label>
                            </div>
                            <div class="col-6">
                                <div class="link-primary no-decoration text-end">He olvidado mi contraseña</div>
                            </div>
                        </div> -->

                        <br>
                        <input type="submit" value="Login" name="Login_IniciarSesion" class="btn btn-primary">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- <form action="" method="post">
    <input type="submit" value="Volver a la página principal" name="Login_CerrarSesion">
</form> -->