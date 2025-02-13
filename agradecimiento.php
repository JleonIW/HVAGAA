<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Gracias por tu amor!</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #ff4e50, #fc913a, #ff77a9, #ff4081);
            background-size: 300% 300%;
            animation: gradientBG 6s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card {
            background: #fdf5e6;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
            width: 60%;
            max-width: 500px;
            position: relative;
            font-family: 'Dancing Script', cursive;
            border: 3px solid #8B4513;
            transform: rotate(-3deg);
        }

        .photos {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
        }
        .photos img {
            position: absolute;
            width: 70px;
            height: 70px;
            border-radius: 10px;
            transform: rotate(-10deg);
        }
        .photo1 { top: -20px; left: -20px; }
        .photo2 { top: -20px; right: -20px; transform: rotate(10deg); }
        .photo3 { bottom: -20px; left: -20px; transform: rotate(15deg); }
        .photo4 { bottom: -20px; right: -20px; transform: rotate(-15deg); }

        .message {
            font-size: 23px;
            color: #8B4513;
            font-family: 'Dancing Script', cursive;
            font-weight: bold;
            text-align: center;
            background: rgba(255, 255, 255, 0.7);
            padding: 15px;
            border-radius: 10px;
            border: 2px solid #8B4513;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
        <div class="photos">
            <img class="photo1" src="./images/Helaito.jpg" alt="Foto 1">
            <img class="photo2" src="./images/imageHBDlove.svg" alt="Foto 2">
            <img class="photo3" src="./images/MaravillosoDia.jpg" alt="Foto 3">
            <img class="photo4" src="./images/myLovE.jpg" alt="Foto 4">
        </div>
        <h1 style="font-family: 'Dancing Script', cursive; color: #8B4513;">¡Gracias por todo tu amor!</h1>
        
        <p class="message">Desde el amanecer hasta el anochecer, cada instante a tu lado es un regalo. Tu paciencia, tu amor incondicional y tu apoyo han sido mi refugio y mi mayor bendición. En ti encontré todo lo que siempre busqué, la mujer que llena mis días de luz y mi corazón de felicidad. Te amo con cada latido, con cada respiro, con cada pensamiento. Gracias por ser mi todo. ❤️</p>
    </div>
</body>
</html>