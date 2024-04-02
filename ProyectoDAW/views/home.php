<style>
    img {
        
    }
</style>

<div class="busqueda col-3 mx-auto text-center d-flex flex-row align-items-center row justify-content-end m-2">
    <form role="search" class="d-flex">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button type="submit" class="btn btn-primary">Buscar
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div>

<div>
    <h3>Productos</h3>
</div>


<div class="cajaProductos d-flex flex-column">

    <!-- <div class="cajaCards m-5 d-flex flex-row"> -->

    <?
    if (isset($_SESSION['productos'])) {

        $conta = 0;

        foreach ($_SESSION['productos'] as $key => $value) {

            $conta++;

            if ($conta == 1 || ($conta - 1) % 3 == 0) {
                // Abre un nuevo div con la clase cajaCards
                echo '<div class="cajaCards m-5 d-flex flex-row">';
            }

            echo '<div class="card card1 p-5 mr-5">';
            echo '<a href="" class="nav-link">';
            // echo '<a href="" class="nav-link tituloCard fs-3">';
            echo '<h5 class="card-title">' . $_SESSION['productos'][$key]->nombre . '</h5>';
            // echo '</a>';
            echo '<p class="card-text">Producto del usuario ' . $_SESSION['productos'][$key]->propietario . '</p>';
            echo '<img src="' . $_SESSION['productos'][$key]->imagen_url . '" class="img-fluid w-50">';
            echo '<br><br>';
            echo '<p class="card-text">Precio: ' . $_SESSION['productos'][$key]->precio . '€</p>';
            echo '<p class="card-text">Categoría: ' . $_SESSION['productos'][$key]->categoria . '</p>';
            echo '<div class="card-text">Descripción: <br>' . $_SESSION['productos'][$key]->descripcion . '</div>';
            echo '</a>';
            echo '</div>';

            // Si es el último elemento o el tercer elemento del grupo, cierra el div
            if ($conta == count($_SESSION['productos']) || $conta % 3 == 0) {
                echo '</div>'; // Cierra el div actual de cajaCards
            }

        }

        /*echo "<tr>";
        echo "<td>". $_SESSION['productos'][$key]->propietario ."</td>";
        echo "<td>". $_SESSION['productos'][$key]->nombre ."</td>";
        echo "<td>". $_SESSION['productos'][$key]->categoria ."</td>";
        echo "<td>". $_SESSION['productos'][$key]->precio ."</td>";
        echo "<td>". $_SESSION['productos'][$key]->descripcion ."</td>";
        echo "<td>". $_SESSION['productos'][$key]->imagen_url ."</td>";
        echo "</tr>";*/
    } else {
        exit('Error');
    }
    ?>

    <!-- </div> -->
</div>


<!--
<div class="cajaProductos d-flex flex-column">

    <div class="cajaCards m-5 d-flex flex-row">
        <div class="card card1 p-5 mr-5">
            <a href="">
                <a href="" class="nav-link tituloCard fs-3">
                    <h5 class="card-title">
                        <? echo $nombre_produ; ?>
                    </h5>
                </a>
                <p class="card-text">Producto del usuario
                    <? echo $_SESSION['user']; ?>
                </p>
                <img src="<? echo $ruta_foto; ?>" class="img-fluid card-img h-30">
                <br><br>
                <p class="card-text">Precio:
                    <? echo $precio_produ; ?>€
                </p>
                <p class="card-text">Categoría:
                    <? echo $categoria_produ; ?>
                </p>
                <div class="card-text">Descripción:
                    <br>
                    <? echo $desc_produ; ?>
                </div>
            </a>
        </div>
        <div class="card card1 p-5 mr-5">
            <a href="" class="">
                <a href="" class="nav-link tituloCard fs-3 text-center">
                    WE LOVE OUR CUSTOMERS
                </a>
                <img class="img-articulo"
                    src="https://hips.hearstapps.com/hmg-prod/images/chaqueton-cruzado-jack-and-jones-1605794750.jpg">
                <p class="text-center">We are known to provide best possible service ever</p>
            </a>
        </div>
        <div class="card card1 p-5">
            <a href="">
                <a href="" class="nav-link tituloCard fs-3 text-center">
                    WE LOVE OUR CUSTOMERS
                </a>
                <img class="img-articulo"
                    src="https://hips.hearstapps.com/hmg-prod/images/chaqueton-cruzado-jack-and-jones-1605794750.jpg">
                <p class="text-center">We are known to provide best possible service ever</p>
            </a>
        </div>
    </div>

</div>
-->



<!--

<div class="cajaProductos d-flex flex-column">

    <div class="cajaCards m-5 d-flex flex-row">
        <div class="card card1 p-5 mr-5">
            <a href="">
                <a href="" class="nav-link tituloCard fs-3 text-center">
                    WE LOVE OUR CUSTOMERS
                </a>
                <img class="img-articulo"
                    src="https://hips.hearstapps.com/hmg-prod/images/chaqueton-cruzado-jack-and-jones-1605794750.jpg">
                <p class="text-center">We are known to provide best possible service ever</p>
            </a>
        </div>
        <div class="card card1 p-5 mr-5">
            <a href="" class="">
                <a href="" class="nav-link tituloCard fs-3 text-center">
                    WE LOVE OUR CUSTOMERS
                </a>
                <img class="img-articulo"
                    src="https://hips.hearstapps.com/hmg-prod/images/chaqueton-cruzado-jack-and-jones-1605794750.jpg">
                <p class="text-center">We are known to provide best possible service ever</p>
            </a>
        </div>
        <div class="card card1 p-5">
            <a href="">
                <a href="" class="nav-link tituloCard fs-3 text-center">
                    WE LOVE OUR CUSTOMERS
                </a>
                <img class="img-articulo"
                    src="https://hips.hearstapps.com/hmg-prod/images/chaqueton-cruzado-jack-and-jones-1605794750.jpg">
                <p class="text-center">We are known to provide best possible service ever</p>
            </a>
        </div>
    </div>

</div>


<div class="contenedor-ofertas">
    <article class="articulo-ofertas">
        <h3 class="txt-articulo">Ofertas flash</h3>
        <a href="" class="link-articulo">
            <img class="img-articulo"
                src="https://images-eu.ssl-images-amazon.com/images/G/30/x_site/Top_campaings_reflesh_Q4_23/XCM_CUTTLE_1627152_3397198_379x304_1X_es_ES._SY304_CB577203541_.jpg"
                alt="">
            <p>Explora ahora</p>
        </a>
    </article>
    <article class="articulo-ofertas">
        <h3 class="txt-articulo">Ofertas en Outlet</h3>
        <a href="" class="link-articulo">
            <img class="img-articulo"
                src="https://images-eu.ssl-images-amazon.com/images/G/30/x_site/Top_campaings_reflesh_Q4_23/XCM_CUTTLE_1627152_3397201_379x304_1X_es_ES._SY304_CB577203541_.jpg"
                alt="">
            <p>Explora ahora</p>
        </a>
    </article>
    <article class="articulo-ofertas">
        <h3 class="txt-articulo">Informática y accesorios</h3>
        <a href="" class="link-articulo">
            <img class="img-articulo"
                src="https://images-eu.ssl-images-amazon.com/images/G/30/x-Site/2021/February/FujiDashPC1x._SY304_CB659988641_.jpg"
                alt="">
            <p>Explora ahora</p>
        </a>
    </article>
    <article class="articulo-ofertas">
        <h3 class="txt-articulo">Ideas para Casa y cocina</h3>
        <a href="" class="link-articulo">
            <img class="img-articulo"
                src="https://images-eu.ssl-images-amazon.com/images/G/30/x_site/Top_campaings_reflesh_Q4_23/XCM_CUTTLE_1627152_3397196_379x304_1X_es_ES._SY304_CB577203541_.jpg"
                alt="">
            <p>Explora ahora</p>
        </a>
    </article>
</div>

<article class="articulo-ofertas-multiples">
    <h4 class="txt-ofertas-multiples">Software</h4>
    <div class="contenedor-img-ofertas-multiples">
        <a class="link-oferta-multiple">
            <figure class="fig-oferta-multiple">
                <img class="img-oferta-multiple"
                    src="https://images-eu.ssl-images-amazon.com/images/G/30/ES-hq/2022/img/Digital_Software/XCM_CUTTLE_1414775_2234756_ES_CUTTLE_186x116_es_ES._SY116_CB626133823_.jpg"
                    alt="">
                <figcaption class="figcaption-oferta-multiple">Utilidades y mantenimiento</figcaption>
            </figure>
        </a>
        <a class="link-oferta-multiple">
            <figure class="fig-oferta-multiple">
                <img class="img-oferta-multiple"
                    src="https://images-eu.ssl-images-amazon.com/images/G/30/ES-hq/2022/img/Digital_Software/XCM_CUTTLE_1412329_2216832_ES_CUTTLE_186x116_es_ES._SY116_CB627497876_.jpg"
                    alt="">
                <figcaption class="figcaption-oferta-multiple">Seguridad informática</figcaption>
            </figure>
        </a>
    </div>
    <div class="contenedor-img-ofertas-multiples">
        <a class="link-oferta-multiple">
            <figure class="fig-oferta-multiple">
                <img class="img-oferta-multiple"
                    src="https://images-eu.ssl-images-amazon.com/images/G/30/ES-hq/2022/img/Digital_Software/XCM_CUTTLE_1414775_2234756_ES_CUTTLE_186x116_es_ES._SY116_CB626133823_.jpg"
                    alt="">
                <figcaption class="figcaption-oferta-multiple">Utilidades y mantenimiento</figcaption>
            </figure>
        </a>
        <a class="link-oferta-multiple">
            <figure class="fig-oferta-multiple">
                <img class="img-oferta-multiple"
                    src="https://images-eu.ssl-images-amazon.com/images/G/30/ES-hq/2022/img/Digital_Software/XCM_CUTTLE_1412329_2216832_ES_CUTTLE_186x116_es_ES._SY116_CB627497876_.jpg"
                    alt="">
                <figcaption class="figcaption-oferta-multiple">Seguridad informática</figcaption>
            </figure>
        </a>
    </div>
    <a class="link-inf-oferta-multiple" href="">Enlace</a>
</article>

-->