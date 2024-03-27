

document.addEventListener("DOMContentLoaded", function() {
    let btnVerProducto = document.querySelector("input[name='Producto_VerProducto']");
    btnVerProducto.addEventListener("click", function() {
        let myModal = new bootstrap.Modal(document.getElementById('modalProducto'));
        myModal.show();
    });
});

/*
// Cierra la alerta cuando se hace clic en el botón de cerrar
document.addEventListener('DOMContentLoaded', function () {
    var alerta = new bootstrap.Alert(document.querySelector('.alert'));
});
*/