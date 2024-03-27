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

                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?php recuerda('nombre','Registro_Registrar');?>">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'nombre');
                            ?>
                        </p>

                        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Apellidos" value="<?php recuerda('apellidos','Registro_Registrar');?>">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'apellidos');
                            ?>
                        </p>

                        <input type="text" name="user" id="user" class="form-control" placeholder="Usuario" value="<?php recuerda('user','Registro_Registrar');?>">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'user');
                                // usuario ya registrado
                            ?>
                        </p>

                        <input type="password" name="pass" id="pass" class="form-control" placeholder="Contraseña">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'pass');
                                // errores($errores, 'passVal'); formato incorrecto
                            ?>
                        </p>

                        <input type="password" name="passRep" id="passRep" class="form-control" placeholder="Repetir contraseña">
                        <p class="error">
                            <?php
                                if (isset($errores)){
                                    errores($errores, 'passRep');
                                    errores($errores, 'passRepVal');
                                }
                            ?>
                        </p>

                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php recuerda('email','Registro_Registrar');?>">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'email');
                                // email ya registrado
                            ?>
                        </p>

                        <div class="row mb-3">
                            <label for="fecha_nacimiento" class="col-sm-3 col-form-label col-form-label-sm fw-light">Fecha de nacimiento</label>
                            <div class="col-sm-9">
                                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" value="<?php recuerda('fecha_nacimiento','Registro_Registrar');?>">
                            </div>
                            <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'fecha_nacimiento');
                            ?>
                        </p>
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