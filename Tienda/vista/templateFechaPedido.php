<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <main class="container justify-center w-75 my-5 p-5 rounded shadow bg-light">

        <div class="text-center mb-5">
            <h1>Busquedas de los Pedidos</h1>
        </div>

        <div>
            <?php
            $edido = new Pedido();
            $pedido->VerListaPedido($fecha_1,$fecha_2);
            ?>
        </div>

        <form action="../index.php">
            <div class="d-grid mt-4">
                <input class="btn btn-primary" type="submit" value="Volver">
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>