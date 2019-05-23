    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/pizzas.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title></title>
    </head>

    <body>
    <?php
    require ('../../navbar/index.php');
    ?>
    <header>
    <div class="textos">
    <h1 class="titulo">Star-Soft</h1>
    <h3 class="subtitulo">Dessarrollo Web Pizzeria </h3>
    <a href="index.php" class="boton">Home</a>
    </div>
    
    </header>
    <main>
    <!--HAWAIANA-->
    <section class="acerca-de">
    <div class="wrap">
        <div class="tarjeta-wrap">
        <div class="tarjeta">
            <div class="adelante img1"></div>
            <div class="atras">
            <h3>Hawaiana</h3><br>
            </div>
        </div>
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" 
        data-target="#ModalPizzaH">
	Ordenar
        </button>    
        </div>
    <!--PEPERONI-->
        <div class="tarjeta-wrap">
        <div class="tarjeta">
            <div class="adelante img2"></div>
            <div class="atras">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sed!</p>
            </div>
        </div>
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" 
        data-target="#ModalPizza">
	Ordenar
        </button>  
        </div>
    <<!--Mexicana-->
        <div class="tarjeta-wrap">
        <div class="tarjeta">
            <div class="adelante img3"></div>
            <div class="atras">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sed!</p>
            </div>
        </div>
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" 
        data-target="#ModalPizza">
	Agregar
        </button> 
        </div> 
    </div>
    </section>
<!--TRES QUESOS-->
    <section class="acerca-de">
    <div class="wrap">
        <div class="tarjeta-wrap">
        <div class="tarjeta">
            <div class="adelante img4"></div>
            <div class="atras">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sed!</p>
            </div>
        </div>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" 
        data-target="#ModalPizza">
	Ordenar
        </button> 
        </div>
        <!--CARNES FRIAS-->
        <div class="tarjeta-wrap">
        <div class="tarjeta">
            <div class="adelante img5"></div>
            <div class="atras">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sed!</p>
            </div>
        </div>
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" 
        data-target="#ModalPizza">
	Ordenar
        </button> 
        </div>
        <!--CHORIZO-->
        <div class="tarjeta-wrap">
        <div class="tarjeta">
            <div class="adelante img6"></div>
            <div class="atras">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sed!</p>
            </div>
        </div>
        <button type="button" class="btn btn-outline-danger" data-toggle="modal" 
        data-target="#ModalPizza">
	Ordenar
        </button> 
        </div>
    </div>
    </section>

    <section class="fondo">
    </section>
    </main>
    </body>
    </html>
    <?php require 'pizza_elegir/index.php' ?>