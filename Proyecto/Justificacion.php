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
            margin-top: 50px;
        }

        .image-container {
            position: relative;
            width: 100%;
            max-width: 350px; /* Ajustamos el tamaño */
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .caption {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            opacity: 0; 
            visibility: hidden;  
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

       
        .image-container:hover .caption {
            opacity: 1; 
            visibility: visible;  /
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
echo "<h1>Justificación</h1>"
?>
<div class="text-container">
    <?php  
    echo "<p>La importancia de la salud mental no puede subestimarse; afecta cada aspecto de nuestras vidas, desde nuestras relaciones hasta nuestro rendimiento en el trabajo y en la escuela. Sin embargo, muchas personas no buscan ayuda porque temen ser juzgadas o porque no tienen acceso a servicios.</p>";
    ?>
</div>

<div class="images-container">

    <div class="image-container">
        <img class="image" src="https://i0.wp.com/post.healthline.com/wp-content/uploads/2020/04/8252-Therapy_for_Every_Budget-1296x728-Header.jpg?w=1155&h=1528">
    </div>
    <div class="image-container">
        <img class="image" src="https://laroussemagazine.mx/wp-content/uploads/2024/07/SaludMental-Mexico_nota_Portada-1.jpg">
    </div>
</div>


<div class="image-container">
    <img src="https://i0.wp.com/atiempo.tv/wp-content/uploads/2024/11/IMG_4098.jpeg?resize=800%2C800&ssl=1">
    <div class="caption">La conducta no es una ciencia exacta, el psicodiagnóstico sí lo es. ¿Por qué? Porque se basa en la axiología, y la axiología en las matemáticas. Por lo tanto, 2 + 2 van a ser 4.</div>
</div>

</body>
</html>
