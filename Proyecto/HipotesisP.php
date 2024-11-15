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

        h1 {
            font-size: 36px;
            color: #610B5E;
            margin-top: 30px;
            text-align: center;
            font-weight: bold;
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
            margin-top: 50px;
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
    </style>
</head>
<body>

<?php 
echo "<h1>Hipótesis Positiva</h1>"
?>

<div class="text-container">
    <?php  
    echo "<p>Mejorar el acceso a servicios de salud mental y crear conciencia sobre su importancia contribuirá al bienestar general de la población.</p>";
    ?>
</div>

<div class="images-container">
    <img class="image" src="https://diariohumano.com.mx/?attachment_id=40318&amp=1">
    <img class="image" src="https://www.unir.net/wp-content/uploads/2020/07/Como-ser-psicologo-clinico-requisitos-formacion-y-aptitudes.jpg">
</div>

</body>
</html>
