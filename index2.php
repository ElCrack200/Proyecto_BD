<!DOCTYPE html> 
<html>
<head>
<title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1> Glosario Informático</h1>
        <p>Usted puede leer, crear y eliminar las palabras del glosario</p>
        <table class="table">
            <tbody>
                <?php include 'read2.php'; ?>
            </tbody>
        </table>
    </div>
    <div class="container">
       <h5> INGRESO DE DATOS </h5>
       <form class="form-inline m-2" action="create.php" method="POST">
                <label for="word">Palabra:</label>
                <input type="text" class="form-control m-2" id="word" name ="word">
                <label for="mean">Significado:</label>
                <input type="text" class="form-control m-2" id="mean" name ="mean">
                <label for="category">Categoría:</label>
                <input type="text" class="form-control m-2" id="category" name ="category">
                <button type="submit" class="btn btn-primary">Ingresar </button>
       </form>
    </div>
    <div class="container">
        <h5> OTRAS ACCIONES </h5>
        <form class="form-inline m-2" action="clean.php" method="POST">
            <button type="submit" class="btn btn-danger">Borrar Todo</button>
            </form>
            <form method="get" action="index1.php">
            <button type="submit"class="btn btn-primary">Ordenar Alfabéticamente</button>
            </form>
            <p></p>
            <form method="get" action="index.php">
            <button type="submit"class="btn btn-primary">Vista Normal(Sin Ordenar)</button>
            </form>
            <p></p>
            <form method="get" action="index2.php">
            <button type="submit"class="btn btn-primary">Ordenar por Categoría</button>
            </form>

    </div>
</body>
</html>