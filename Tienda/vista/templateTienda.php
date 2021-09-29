<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>

<body class=" bg-dark">

    <!--Main/Productos-->

    <main class=" bg-dark">
        <div class="container bg-light my-5 p-5 rounded shadow text-center">
            <div class="row">
                <form action="controlador/VerFechaPedido.php" method="POST">
                    <div>
                        <input type="date" name="fecha_1" required>
                        <input type="date" name="fecha_2" required>
                        <input type="submit" class="btn btn-warning" value="Lista de Pedidos">
                    </div>
                </form>
            </div>
        </div>

        <form action="controlador/IngresarPedido.php" method="POST">



            <div class="container bg-light my-5 p-5 rounded shadow">

                <div class="text-center mb-5">
                    <h1>Nuestros Productos</h1>

                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card rounded shadow" style="width: 36rem;">
                            <img src="vista/img/img1.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Ensalada primavera con salsa cesar
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col d-grid"><input type="number" name="cantidad1" value="0" required></div>
                                        <div class="col d-grid bg-success rounded shadow text-center text-light">
                                            <h4>$50</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card rounded shadow" style="width: 36rem;">
                            <img src="vista/img/img2.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Fideos al pesto
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col d-grid"><input type="number" name="cantidad2" value="0" required></div>
                                        <div class="col d-grid bg-success rounded shadow text-center text-light">
                                            <h4>$100</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-sm-6">
                        <div class="card rounded shadow" style="width: 36rem;">
                            <img src="vista/img/img3.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Bistec a la parrilla
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col d-grid"><input type="number" name="cantidad3" value="0" required></div>
                                        <div class="col d-grid bg-success rounded shadow text-center text-light">
                                            <h4>$150</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card rounded shadow" style="width: 36rem;">
                            <img src="vista/img/img4.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Sordentino
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col d-grid"><input type="number" name="cantidad4" value="0" required></div>
                                        <div class="col d-grid bg-success rounded shadow text-center text-light">
                                            <h4>$200</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-5">
                    <div class="col-sm-6">
                        <div class="card rounded shadow" style="width: 36rem;">
                            <img src="vista/img/img5.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Hamburgesa con Papas
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col d-grid"><input type="number" name="cantidad5" value="0" required></div>
                                        <div class="col d-grid bg-success rounded shadow text-center text-light">
                                            <h4>$250</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card rounded shadow" style="width: 36rem;">
                            <img src="vista/img/img6.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">Cazuela
                                </p>
                                <div>
                                    <div class="row">
                                        <div class="col d-grid"><input type="number" name="cantidad6" value="0" required></div>
                                        <div class="col d-grid bg-success rounded shadow text-center text-light">
                                            <h4>$300</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center my-5">
                    <h1>Termine su Compra!</h1>
                    <div class="mb-3">
                        <label for="name" class="form-label mb-3">Por favor, ingrese su nombre para comprar.</label>
                        <input type="text" name="Nombre" class="form-control mb-3" placeholder="ej. Jorge" required>
                        <div class="col d-grid "><input name="ingresar" type="submit" value="Terminar Compra" class="btn btn-danger"></div>
                    </div>
                </div>
            </div>
        </form>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>