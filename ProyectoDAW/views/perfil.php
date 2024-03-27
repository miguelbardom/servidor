
<div class="container mt-5 mb-4">
    <div class="row gx-8">
        <div class="col-6 offset-3 mb-4">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row mt-3 ms-1">
                        <div class="">
                            <h3 class="black justify-content text-center">Perfil de <b><? echo $_SESSION['user']; ?></b></h3>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">

                    <form action="" method="post" class="text-center">
                        
                        <input type="submit" value="Publicar Producto" name="Perfil_PublicarProducto" class="btn btn-success">
                        <input type="submit" value="Editar Perfil" name="Perfil_EditarPerfil" class="btn btn-primary">
                        <input type="submit" value="Eliminar Perfil" name="Perfil_EliminarPerfil" class="btn btn-danger">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>