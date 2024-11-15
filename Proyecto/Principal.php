<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        body {
            background: #F6CEE3;
            width: 100%;
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
        }

        .navegacion {
            width: 60%;
            margin: 100px auto;
            background: #F6CEE3;
        }

        .navegacion ul {
            list-style: none;
            display: flex;
            justify-content: space-evenly;
            padding-left: 0;
        }

        .menu > li {
            display: inline-block;
            margin: 0 15px;
        }

        .menu > li > a {
            display: block;
            padding: 20px 30px;
            color: #610B5E;
            font-family: sans-serif;
            text-decoration: none;
            text-align: center;
            font-size: 22px;
        }

        .menu li a:hover {
            color: #04B4AE;
            transition: all .3s;
        }

        .submenu {
            position: absolute;
            background: #F7819F;
            width: 200px;
            visibility: hidden;
            opacity: 0;
            transition: opacity 1.5s;
            z-index: 1;
        }

        .submenu li a {
            display: block;
            padding: 20px;
            color: #610B4B;
            font-family: unset;
            text-decoration: none;
            font-size: 18px;
        }

        .menu li:hover .submenu {
            visibility: visible;
            opacity: 1;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 900px;
            width: 100%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 100px;
        }

        .images-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            width: 100%;
            max-width: 900px;
            margin-top: 100px;
        }

        .image {
            max-width: 600px;
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
            font-size: 32px;
            color: #555;
            margin: 60px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <nav class="navegacion">
        <ul class="menu">
            <li><a href="Planteamiento.php">Planteamiento</a></li>
            <li><a href="Justificacion.php">Justificación</a></li>
            <li><a href="#">Hipótesis</a>
                <ul class="submenu">
                    <li><a href="HipotesisP.php">Hipótesis Positiva</a></li>
                    <li><a href="HipotesisN.php">Hipótesis Negativa</a></li>
                </ul>
            </li>
            <li><a href="Bibliografia.php">Bibliografía</a></li>
        </ul>
    </nav>
    
    <div class="images-container">
        <img class="image" src="https://conecta.tec.mx/sites/default/files/styles/header_full/public/2024-10/regular-emociones-dia-mundial-salud-mental.jpg.webp?itok=yyolh3gN">
        <img class="image" src="https://amiif.org/wp-content/uploads/2019/10/Captura-de-Pantalla-2019-10-10-a-las-15.42.17.png">
    </div>
</header>

</body>
</html>
