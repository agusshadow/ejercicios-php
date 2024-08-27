<?php 

$data = $_GET;

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

        <div class="bg-secondary text-white rounded-2 p-4 my-4">
            <h2 class="mb-3">Perfecto <?= $data["name"]?>, estas son las peliculas que seleccionaste</h2>
            <ul>
                <?php foreach ($data["movies"] as $movie) { ?>
                    <li><?= $movie ?></li>  
                <?php }; ?>
            </ul>
            <span>Cantidad de peliculas seleccionadas: <?php echo count($data["movies"]); ?></span>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>