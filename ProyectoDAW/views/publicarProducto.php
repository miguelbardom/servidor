<div class="container mt-5 mb-4">
    <div class="row gx-8">
        <div class="col-6 offset-3 mb-4">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row mt-3 ms-1">
                        <div class="">
                            <h3 class="black justify-content text-center">Publicar Producto</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">

                    <form action="" method="post" enctype="multipart/form-data" class="text-center">

                        <input type="text" name="nombre_produ" id="nombre_produ" class="form-control"
                            placeholder="Nombre del Producto"
                            value="<?php recuerda('nombre_produ', 'Producto_Publicar'); ?>">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'nombre_produ');
                            ?>
                        </p>

                        <select name="categoria_produ" id="categoria_produ" class="form-select">
                            <option disabled selected="">Selecciona una categoría</option>
                            <option value="Moda y complementos" <?php recuerdaSelect('categoria_produ','Moda y complementos', 'Producto_Publicar'); ?> >Moda y complementos</option>
                            <option value="Hogar" <?php recuerdaSelect('categoria_produ','Hogar', 'Producto_Publicar'); ?> >Hogar</option>
                            <option value="Entretenimiento" <?php recuerdaSelect('categoria_produ','Entretenimiento', 'Producto_Publicar'); ?> >Entretenimiento</option>
                        </select>
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'categoria_produ');
                            ?>
                        </p>

                        <input type="text" name="precio_produ" id="precio_produ" class="form-control"
                            placeholder="Precio del producto en €"
                            value="<?php recuerda('precio_produ', 'Producto_Publicar'); ?>">
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'precio_produ');
                            ?>
                        </p>

                        <textarea name="desc_produ" id="desc_produ" class="form-control" cols="" rows="5"
                            placeholder="Describe el Producto"><?php recuerda('desc_produ', 'Producto_Publicar'); ?></textarea>
                        <p class="error">
                            <?php
                            if (isset($errores))
                                errores($errores, 'desc_produ');
                            ?>
                        </p>

                        <div class="row mb-3">
                            <label for="img_produ" class="col-sm-3 col-form-label col-form-label-sm fw-light">Selecciona una imagen</label>
                            <div class="col-sm-9">
                                <input type="file" name="img_produ" id="img_produ" accept="image/*" class="form-control">
                            </div>
                            <p class="error">
                                <?php
                                if (isset($errores))
                                    errores($errores, 'img_produ');
                                ?>
                            </p>
                        </div>

                        <p class="correcto">
                            <?php
                            if (isset($errores))
                                errores($errores, 'validado');
                            ?>
                        </p>

                        <br>
                        <input type="submit" value="Publicar" name="Producto_Publicar" class="btn btn-success">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>