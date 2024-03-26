<div class="container mt-5 mb-4">
    <div class="row gx-8">
        <div class="col-6 offset-3 mb-4">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row mt-3 ms-1">
                        <div class="">
                            <h3 class="black justify-content text-center">Registro</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">

                    <form action="" method="post">

                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                        <p></p>

                        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos">
                        <p></p>

                        <input type="text" name="user" id="user" class="form-control" placeholder="Usuario">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'user');
                            ?>
                        </p>

                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'pass');
                            ?>
                        </p>

                        <!-- <label for="email">Email -->
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        <!-- </label> -->
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'email');
                            ?>
                        </p>

                        <!-- <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                            placeholder="Fecha de nacimiento">
                        <p></p> -->

                        <div class="row mb-3">
                            <label for="fecha_nacimiento" class="col-sm-3 col-form-label col-form-label-sm">Fecha de nacimiento</label>
                            <div class="col-sm-9">
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">
                            </div>
                        </div>

                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'validado');
                            ?>
                        </p>

                        <input type="submit" value="Registrar" name="Registro_Registrar" class="btn btn-success">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- <input type="submit" value="volver" name="Registro_volver"> -->