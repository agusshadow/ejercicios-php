<?php

$movies = [
    "Avengers endgame",
    "Avengers era de ultron",
    "Avengers infinity war",
    "Avengers",
    "Guardianes de la galaxia",
    "Capitana marvel",
    "Marvels",
    "Black widow",
    "Iron man",
    "Thor ragnarok"
]

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Practica 1 - Formularios</title>
</head>
<body>

    <section class="container mt-5">
        <h1 class="text-primary text-center mb-5">Practica 1 - Formularios</h1>
        <form action="procesarFormulario.php" method="GET">
            <div class="bg-secondary text-white rounded-2 p-4 my-4">
                <h2 class="mb-3">Completa tus datos personales</h2>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Apellido</label>
                    <input type="text" id="surname" name="surname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Fecha de nacimiento</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>
            </div>

            <div class="bg-secondary text-white rounded-2 p-4 my-4">
                <h2 class="mb-3">Selecciona las peliculas que son de tu interes</h2>
                
                <?php foreach ($movies as $movie) { ?>
                
                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" value="<?= $movie ?>" id="<?= $movie ?>" name="movies[]">
                    <label class="form-check-label" for="<?= $movie ?>">
                        <?= $movie ?>
                    </label>
                </div>
                
                <?php } ?>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>