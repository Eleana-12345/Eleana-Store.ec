<?php
session_start();
include("conectar.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style1.css">
    <script src="app1.js" async></script>
    <title>Eleana Store</title>
</head>
<body>
    <header>
        <h1>Makeup Store</h1>
    </header>
    <section class="container">
        <!-- Contenedor de elementos -->
        <div class="container-items">
            <div class="item">
                <span class="titulo-item">BASE LÍQUIDA</span>
                <img src="img/baseliquida1.JPEG" alt="" class="img-item">
                <span class="precio-item">$7.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">DELINEADOR DE OJOS</span>
                <img src="img/delineador.JPEG" alt="" class="img-item">
                <span class="precio-item">$3.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">CONTORNO</span>
                <img src="img/contorno.JPEG" alt="" class="img-item">
                <span class="precio-item">$6.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">RUBOR EN BARRA</span>
                <img src="img/ruborliquido1.JPEG" alt="" class="img-item">
                <span class="precio-item">$8.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">ILUMINADOR</span>
                <img src="img/iluminador.JPEG" alt="" class="img-item">
                <span class="precio-item">$9.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">PRIMER</span>
                <img src="img/primer.JPEG" alt="" class="img-item">
                <span class="precio-item">$8.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">CORRECTOR PARA OJOS</span>
                <img src="img/corrector.JPEG" alt="" class="img-item">
                <span class="precio-item">$4.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">DELINEADOR PARA CEJAS EN GEL</span>
                <img src="img/delineadorparacejas.JPEG" alt="" class="img-item">
                <span class="precio-item">$6.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">PESTAÑAS EN BANDA</span>
                <img src="img/pestañas.JPEG" alt="" class="img-item">
                <span class="precio-item">$10.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">MÁSCARA DE PESTAÑAS</span>
                <img src="img/máscara.JPEG.jpg" alt="" class="img-item">
                <span class="precio-item">$6.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">PALETA DE SOMBRAS 25 COLORES</span>
                <img src="img/sombras.JPEG" alt="" class="img-item">
                <span class="precio-item">$16.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">CREMA FACIAL ACLARANTE</span>
                <img src="img/crema.JPEG" alt="" class="img-item">
                <span class="precio-item">$11.00</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/baseliquida1.JPEG" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">BASE LÍQUIDA</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$7.76</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/delineador.JPEG" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">DELINEADOR DE OJOS</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$3.45</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $11.21
                    </span>
                </div>
                
                <button><a href="pago.php">Finalizar Compra</a></button>
            </div>
        </div>
    </section>
</body>
</html>