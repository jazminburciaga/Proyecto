<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #F6CEE3;
            font-family: sans-serif; 
            flex-direction: column;
            padding: 0 10px;
        }
        .text-container {
            width: 100%;
            max-width: 800px;
            margin-bottom: 40px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .images-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            width: 100%;
            max-width: 900px;
        }
        .image {
            max-width: 500px;
            width: 100%;
            display: block;
            border-radius: 10px;
        }
        img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        img:hover {
            transform: scale(1.1); 
        }
        p {
            font-size: 24px;
            color: #555;
            margin: 5px 0;
        }
        }
    </style>
</head>
<body>

<?php 
echo "<h1>Planteamiento</h1>"
?>
<div class="text-container">
    <?php  
    echo "<p>En muchas partes del mundo, millones de personas enfrentan problemas de salud mental sin recibir el apoyo que necesitan. Esto limita su capacidad para vivir plenamente y afecta su calidad de vida en todos los sentidos.</p>";
    ?>
</div>

<div class="images-container">
    <img class="image" src="https://investiga.uned.ac.cr/agendajoven/wp-content/uploads/sites/16/2021/02/tristeza-01-1024x1024.png" alt="Imagen 1 sobre salud mental">
    <img class="image" src="https://noticias.unab.cl/assets/uploads/2021/05/concepto-conciencia-salud-mental_52683-37916.jpg" alt="Imagen 2 sobre salud mental">
</div>

</body>
</html>
